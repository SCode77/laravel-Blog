@extends('layouts.layout')
@section('testTitle','Test Page 2')
@section('testContent')
    <h5 align="center">this is test page <span style="color: red;font-weight: bold">2</span></h5>
    <section id="three" class="main style1 special">
        <div class="container">
            <header class="major">
                <h2>Adipiscing amet consequat</h2>
            </header>
            <p>Ante nunc accumsan et aclacus nascetur ac ante amet sapien sed.</p>
            <div class="row 150%">
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="images/pic02.jpg" alt=""/></span>
                    <h3>Magna feugiat lorem</h3>
                    <p>Adipiscing a commodo ante nunc magna lorem et interdum mi ante nunc lobortis non amet vis sed
                        volutpat et nascetur.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </div>
                <div class="4u 12u$(medium)">
                    <span class="image fit"><img src="images/pic03.jpg" alt=""/></span>
                    <h3>Magna feugiat lorem</h3>
                    <p>Adipiscing a commodo ante nunc magna lorem et interdum mi ante nunc lobortis non amet vis sed
                        volutpat et nascetur.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </div>
                <div class="4u$ 12u$(medium)">
                    <span class="image fit"><img src="images/pic04.jpg" alt=""/></span>
                    <h3>Magna feugiat lorem</h3>
                    <p>Adipiscing a commodo ante nunc magna lorem et interdum mi ante nunc lobortis non amet vis sed
                        volutpat et nascetur.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
