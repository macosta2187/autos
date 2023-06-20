<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Auto;
use App\Http\Controllers\AutoController;
use Illuminate\Support\Facades\Log;

class ExampleTest extends TestCase
{
    
    public function testAPIinsertoauto()    {
   
       
        $autos = [            
            'marca' => 'Chevrolet',
            'modelo' => 'Onix',
            'color' => 'Rojo',
            'puertas' => 4,
            'cilindrado' => 25,
            'automatico' => 'SI',
            'electrico' => 'NO',            
        ];
    
        $response = $this->post('http://127.0.0.1:8000/api/APIinsertoauto', $autos);    
        $response->assertStatus(200);
    
        // Guardar en el archivo de log
        $logData = [
            'ruta' => 'http://127.0.0.1:8000/api/APIinsertoauto',
            'codigo_estado' => $response->getStatusCode(),
            'contenido' => $response->getContent(),
            'autos' => $autos
        ];
    
        Log::info('Resultado de la prueba POST', $logData);
    }


    public function testTraigoauto()
    {
        $response = $this->get('http://127.0.0.1:8000/api/APIlistarauto');
        $response->assertStatus(200);

     
        $logData = [
            'ruta' => 'http://127.0.0.1:8000/api/APIlistarauto',
            'codigo_estado' => $response->getStatusCode(),
            'contenido' => $response->getContent()
        ];

        Log::info('Resultado del test de mostrar Autos por metodo GET ', $logData);
    }


        
       
    


}
