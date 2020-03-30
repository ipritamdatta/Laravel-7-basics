<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


class TestController extends Controller
{
    public function index(){
        echo '<h1>Fluent String</h1>';
        $slice = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice."<br>";

        $string = Str::of('Hello')->append('World');
        echo $string."<br>";

        $result = Str::of('FLUENT STRING PRACTICE BY PRITAM')->lower();
        echo $result."<br>";

        $result = Str::of('Laravel')->trim()->isEmpty();
        echo $result."<br>";
        
        $result = Str::of('pritam datta shuvo')->kebab();
        echo $result."<br>";

        $result = Str::of('pritam datta shuvo')->length();
        echo $result."<br>";

        $truncated = Str::of("The quick brown fox jumps over the lazy dog")->limit(20, ' (...)');
        echo $truncated."<br>";

        $prepend = Str::of("Framework")->prepend("React ");
        echo $prepend."<br>";

        $replace = Str::of("Laravel 6.x")->replace("6.x","7.x");
        echo $replace."<br>";

        $string = "The event will take place between ? and ? or may be at ?";
        $result = Str::of($string)->replaceArray('?',['8:30','12:12', '9:30']);
        echo $result."<br>";

        $slug = Str::of('this is a slug')->slug('-');
        echo $slug."<br>";

        $title = Str::of("this is a title case")->title();
        echo $title."<br>";

        $trim = Str::of('/trim method/')->trim('/');
        echo $trim."<br>";
    }
}
