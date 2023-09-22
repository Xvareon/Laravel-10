<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class QueryController extends Controller{
    public function handleRequest(Request $request){
        $userText = $request->input('userText');
        $url = $userText;

        $originalResponse = Http::get($url)->json();
        $processedResponse = $this->processResponse($originalResponse);


        return response()->json([
            'originalResponse' => $originalResponse,
            'processedResponse' => $processedResponse
        ]);
    }

    private function processResponse($response){
        $processedResponse = $this->processObject($response);

        return $processedResponse;
    }
    
    private function processObject($object, $level = 0){
        $processed =[];
        $keys = array_keys($object);
        if ($keys !== range(0, count($object) - 1)) {
            $processed = [
                'objectCount' => count($object),
            ];
        }
    
            foreach ($object as $key => $value) {
                // Sort characters of the key in descending order
                $sortedKey = $this->sortStringDescending($key);
                
                if (is_array($value)) {
                    
                    // Recursively process nested arrays
                    $processed[$sortedKey] = $this->processObject($value, $level + 1);
                } else {
                    // Sort characters of the value in descending order
                    $sortedValue = $this->sortStringDescending($value);
                    $processed[$sortedKey] = $sortedValue;
                }
            }
    
            return $processed;
    }

    // function to sort the strings
    private function sortStringDescending($string){
        if (is_string($string)) {
            $characters = str_split($string);
            arsort($characters);
            return implode('', $characters);
        } else {
            return $string;
        }
    }
}