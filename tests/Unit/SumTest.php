<?php
describe('sum', function  (){
    it('sum', function ($number1, $number2,$response) {
        $result = $number1+$number2;
        expect($result)->toBe($response);
    })->with([
        [1,2,3]
    ]);

    it('sum floats',function(){
        $result= 2.0 + 3.0;
        expect($result)->toBe(5.0);
    });
});