{{-- layouts/common.blade.phpを読み込む --}}
@extends('layouts.common')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'showtime')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container decision">
        <div class="row">
            <div class="col-md-8 mx-auto highlight">
                <h2>showtime</h2>
                <h3>（試合日の）ハイライト</h3>
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/TKXgjNEReHI" title="YouTube video player" 
                    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen></iframe>
                </div>
            </div>
            
            <!-- 打者と投手の成績を出し分ける。二刀流日は両方出す -->
            <div class="col-md-8 mx-auto batter">
                <h3>打者成績</h3>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">試合日</th>
                            <th scope="col">試合結果</th>
                            <th scope="col">対戦相手</th>
                            <th scope="col">打数</th>
                            <th scope="col">安打</th>
                            <th scope="col">盗塁</th>
                            <th scope="col">本塁打</th>
                            <th scope="col">打点</th>
                            <th scope="col">得点</th>
                            <th scope="col">四球</th>
                            <th scope="col">死球</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">8/18</th>
                            <td>マリナーズ</td>
                            <td>5-3勝</td>
                            <td>5</td>
                            <td>3</td>
                            <td>0</td>
                            <td>1</td>
                            <td>2</td>
                            <td>2</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">内容</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>右本、三ゴロ、左二、左安、見三振、空三振</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-8 mx-auto pitcher">
                <h3>投手成績</h3>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">試合日</th>
                            <th scope="col">対戦相手</th>
                            <th scope="col">勝/負</th>
                            <th scope="col">回</th>
                            <th scope="col">球数</th>
                            <th scope="col">打者</th>
                            <th scope="col">被安打</th>
                            <th scope="col">非本塁打</th>
                            <th scope="col">奪三振</th>
                            <th scope="col">与四球</th>
                            <th scope="col">与死球</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">8/18</th>
                            <td>マリナーズ</td>
                            <td>-</td>
                            <td>6</td>
                            <td>101</td>
                            <td>25</td>
                            <td>2</td>
                            <td>0</td>
                            <td>8</td>
                            <td>3</td>
                            <td>0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-8 mx-auto batter">
                <h3>シーズン成績（打者）</h3>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">打率</th>
                            <th scope="col">試合</th>
                            <th scope="col">打席</th>
                            <th scope="col">打数</th>
                            <th scope="col">安打</th>
                            <th scope="col">二塁打</th>
                            <th scope="col">三塁打</th>
                            <th scope="col">本塁打</th>
                            <th scope="col">打点</th>
                            <th scope="col">得点</th>
                            <th scope="col">三振</th>
                            <th scope="col">四球</th>
                            <th scope="col">死球</th>
                            <th scope="col">犠打</th>
                            <th scope="col">犠飛</th>
                            <th scope="col">盗塁</th>
                            <th scope="col">盗塁死</th>
                            <th scope="col">出塁率</th>
                            <th scope="col">長打率</th>
                            <th scope="col">OPS</th>
                            <th scope="col">得点圏</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="col-md-8 mx-auto pitcher">
                <h3>シーズン成績（投手）</h3>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">防御率</th>
                            <th scope="col">登板</th>
                            <th scope="col">先発</th>
                            <th scope="col">完封</th>
                            <th scope="col">完投</th>
                            <th scope="col">勝</th>
                            <th scope="col">負</th>
                            <th scope="col">H</th>
                            <th scope="col">HP</th>
                            <th scope="col">S</th>
                            <th scope="col">勝率</th>
                            <th scope="col">投球回</th>
                            <th scope="col">奪三振</th>
                            <th scope="col">奪三振率</th>
                            <th scope="col">QS率</th>
                            <th scope="col">被打率</th>
                            <th scope="col">K/BB</th>
                            <th scope="col">WHIP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection