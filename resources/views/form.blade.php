@extends('template/default/layout')


@section('navbar')
@parent
@endsection


@section('header')

@endsection


@section('slidebar')

@endsection


@section('main')
  @parent
@endsection


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="contact_form">
                <h3 class="heading"><strong>Новая статья</strong></h3>
                <div class="con_form">
                  <form action="{{ route('art') }}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="text" placeholder="Заголовок" tabindex="1" name="title" class="con_txt">

                    <input type="text" placeholder="Автор" tabindex="1" name="author" class="con_txt">

                    <textarea placeholder="Описание" name="description" type="text" class="con_txt_3" tabindex="4"></textarea>

                    <textarea placeholder="Статья..." name="text" type="text" class="con_txt_3" tabindex="4"></textarea>

                    <button type="submit" value="Submit" class="con_txt2">Опубликовать</button>

                    </form>
                </div>
            </div>
        </div>
        <!-- Calendar -->
        <div class="col-md-5">
          <h3 class="heading"><strong>Календарь</strong></h3>

          <div class="col-md-12" style="padding:0px;">
            <br>
              <table class="table table-bordered table-style table-responsive">
                <tr>
                  <th colspan="2"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></th>
                  <th colspan="3"> Jan - 2017</th>
                  <th colspan="2"><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></th>
                </tr>
                <tr>
                  <th>S</th>
                  <th>M</th>
                  <th>T</th>
                  <th>W</th>
                  <th>T</th>
                  <th>F</th>
                  <th>S</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
                  <td>7</td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>9</td>
                  <td>10</td>
                  <td>11</td>
                  <td class="today">12</td>
                  <td>13</td>
                  <td>14</td>
                </tr>
                <tr>
                  <td>15</td>
                  <td>16</td>
                  <td>17</td>
                  <td>18</td>
                  <td>19</td>
                  <td>20</td>
                  <td>21</td>
                </tr>
                <tr>
                  <td>22</td>
                  <td>23</td>
                  <td>24</td>
                  <td>25</td>
                  <td>26</td>
                  <td>27</td>
                  <td>28</td>
                </tr>
                  <tr>
                  <td>29</td>
                  <td>30</td>
                  <td>31</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                
              </table>

          </div>
        </div>
    </div>
</div>
@endsection


@section('footer')
@endsection