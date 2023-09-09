<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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
        if (is_array($object)) {
            $processed = [
                'objectCount' => count($object),
                'items' => []
            ];
    
            foreach ($object as $key => $value) {
                // Sort characters of the key in descending order
                $sortedKey = $this->sortStringDescending($key);
    
                if (is_array($value)) {
                    // Recursively process nested arrays
                    $processed['items'][$sortedKey] = $this->processObject($value, $level + 1);
                } else {
                    // Sort characters of the value in descending order
                    $sortedValue = $this->sortStringDescending($value);
                    $processed['items'][$sortedKey] = $sortedValue;
                }
            }
    
            return $processed;
        } else {
            return $object;
        }
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