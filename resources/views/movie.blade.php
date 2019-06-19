@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Random movie picker</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif

                      @php
                        $array = file_get_contents('moviesnew.json');
                        $json = json_decode($array, true);
                        $random = rand(0, count($json) - 1);
                        $one_item_title = $json[$random]['title'];
                        $one_item_year = $json[$random]['year'];
                        $one_item_string_title = json_encode($one_item_title);
                        $res_title = preg_replace("/[^a-zA-Z0-9\s]/", "", $one_item_string_title);
                        $one_item_string_year = json_encode($one_item_year);

                        $url = "https://www.imdb.com/find?ref_=nv_sr_fn&q=". $res_title . "+" . $one_item_string_year ."&s=all";
                      @endphp

                      <p>Maybe you could watch @php echo($one_item_string_title) @endphp from the year @php echo($one_item_string_year) @endphp.</p>

                      <p>Click <a href='<?php echo $url; ?>'>here</a> to read what its about.</p>

                        <FORM>
                        <INPUT TYPE="button" onClick="history.go(0)" VALUE="Refresh">
                        </FORM>
                    </div>
              </div>
          </div>
      </div>
  </div>


@endsection
