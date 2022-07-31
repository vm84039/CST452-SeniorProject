@extends('layouts.portfolio')
@section('title', 'Code Snippets')
@section('content')
      <h3 class="portfolio" style="text-align: center;margin-bottom: 100px">Code Snippets<br></h3>
      <div style="margin-left: 250px;margin-right: 100px" class="accordion" id="accordionExample">
          <div class="card">
              <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Tic-Tac-Toe Code Snippet
                      </button>
                  </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body" style="  height:1500px; background: white; float:left; margin: 25px 50px 50px 10%;">
                      <img style=" width: 100%; height:100%;  " src="{{ asset('assets/img/tSnippet.png') }}" alt="GCU" />
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Hangman Code Snippet
                      </button>
                  </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body" style="  height: 1500px; background: white; float:left; margin: 25px 50px 50px 10%;">
                      <img style=" width: 100%; height:100%;  " src="{{ asset('assets/img/hSnippet.png') }}" alt="GCU" />
                  </div>
              </div>
          </div>
          <div class="card">
              <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Peg Code Snippets
                      </button>
                  </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body" style="  height:1500px; background: white; float:left; margin: 25px 50px 50px 5%;">
                      <img style=" width: 100%; height:100%;  " src="{{ asset('assets/img/pSnippet1.png') }}" alt="GCU" />
                  </div>
                  <div class="card-body" style="  height:1500px; background: white; float:left; margin: 25px 50px 50px 5%;">
                      <img style=" width: 100%; height:100%;  " src="{{ asset('assets/img/pSnippet2.png') }}" alt="GCU" />
                  </div>
              </div>
          </div>
      </div>
    <script></script>
@stop
