@extends('layouts.portfolio')
@section('title', 'About Me')
@section('content')
    <div  class="portfolio" style="margin-left: 250px">
        <div style="height: 200px; width: 200px; background: white; float:left; margin-right: 50px;margin-bottom: 50px;">
             <img style="height: 100%; padding: 5px; " src="{{ asset('assets/img/me.jpg') }}" alt="GCU" />
        </div>
        <div style="margin-right: 150px; overflow-wrap: break-word;background:white; color: black; padding: 50px">
            <h1 style="text-align: center; margin-bottom: 50px">About Me</h1>
            &emsp;&emsp;Hello, my name is Vinson Martin.  I graduate from Grand Canyon University in Phoenix Arizona on August 7, 2022
            with a Bachelor of Science in Computer Programming degree.  In my studies, I have grown proficient in several programming languages
            including Java, C#, C++, etc.  I have also also become proficient with databases as cloud computing.  <br><br>

            &emsp;&emsp;For work experience, since 2015, I have been an employee of American Airlines.  As a Workforce
            Analyst, I have become an expert with utilizing the Aspect Software for live contact management and workforce optimization.
            I utilized Aspect DataCenter to perform live queries and customized views to suit many needs.

            &emsp;&emsp;I am a married father of two teenagers who is the first of my siblings to graduate from college.
            I am very hardworking and professional.  I thrive in both team environments and in independent settings.  I
            look forward to what the future hold in my new adventure of development and software engineering.

        </div>


    </div>
@stop
