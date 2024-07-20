@extends('client.layouts.master')

@section('title')
    Contact
@endsection
@section('content')
<main>
    <!-- breadcrumb start -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumb-index">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-ul">
                            <li class="breadcrumb-li">
                                <a class="breadcrumb-link" href="{{route('todo.home')}}">Home</a>
                            </li>
                            <li class="breadcrumb-li">
                                <span class="breadcrumb-text">Faq's</span>
                            </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <!-- other page start -->
    <section class="faq-page section-ptb ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- faq title start -->
                    <div class="section-capture">
                        <div class="section-title">
                            <h2><span>FAQ - Câu hỏi thường gặp</span></h2>
                        </div>
                    </div>
                    <!-- faq title end -->
                    <div class="content-qa-banner">
                        <div class="banner-image banner-hover">
                            <img src="{{asset("assets/client/img/other-pages/faq.jpg")}}" class="img-fluid" alt="faq">
                        </div>
                        <div class="que-ans">
                            <ul class="accordian-ul">
                                <li class="accordian-li">
                                    <a href="#template-1" class="accordian" data-bs-toggle="collapse" aria-expanded="true">
                                        <h6 class="acco-text">Câu hỏi 1</h6>
                                        <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <div class="ans-accordian show" id="template-1">
                                        <p>Trả lời 1</p>
                                        <p>trả lời 2</p>
                                    </div>
                                </li>
                                <li class="accordian-li">
                                    <a href="#template-2" class="accordian" data-bs-toggle="collapse">
                                        <h6 class="acco-text">Câu hỏi 2</h6>
                                        <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <div class="ans-accordian collapse" id="template-2">
                                        <p>Trả lời 1</p>
                                        <p>trả lời 2</p>
                                    </div>
                                </li>
                                <li class="accordian-li">
                                    <a href="#template-3" class="accordian" data-bs-toggle="collapse">
                                        <h6 class="acco-text">Câu hỏi 3</h6>
                                        <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                    <div class="ans-accordian collapse" id="template-3">
                                        <p>Trả lời 1</p>
                                        <p>trả lời 2</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- other page end -->
    <!-- help-desk start -->
    <section class=" help-desk section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-capture">
                        <div class="section-title">
                            <h2><span>Thông tin liên hệ</span></h2>
                        </div>
                    </div>
                    <ul class="help-wrap">
                        <li class="desk-wrap">
                            <div class="help-desk-info">
                                <a href="javascript:void(0)"><i class="bi bi-telephone-inbound"></i></a>
                                <div class="help-desk-text">
                                    <h6>Số điện thoại hỗ trợ</h6>
                                    <p>+84 123 456 7890</p>
                                </div>
                            </div>
                        </li>
                        <li class="desk-wrap">
                            <div class="help-desk-info">
                                <a href="javascript:void(0)"><i class="fas fa-mail-bulk"></i></a>
                                <div class="help-desk-text">
                                    <h6>Email</h6>
                                    <p>abc@gmail.com</p>
                                </div>
                            </div>
                        </li>
                        <li class="desk-wrap">
                            <div class="help-desk-info">
                                <a href="javascript:void(0)"><i class="bi bi-facebook"></i></a>
                                <div class="help-desk-text">
                                    <h6>fanpage</h6>
                                    <p>fb.com/abcxyz</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- help-desk end -->
    <!-- return policy start -->
    {{-- <section class="ret-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-capture">
                        <!-- ret title start -->
                        <div class="section-title">
                            <h2><span>Return policy</span></h2>
                        </div>
                    </div>
                    <div class="que-ans">
                        <ul class="accordian-ul">
                            <li class="accordian-li">
                                <a href="#collapse-template-1" class="accordian" data-bs-toggle="collapse" aria-expanded="true">
                                    <h6 class="acco-text">What is lorem ipsum?</h6>
                                    <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                                <div class="ans-accordian show" id="collapse-template-1">
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <p>It was popularised in the 1960s with the release of letraset sheets containing lorem ipsum passages, and more recently with desktop publishing software like aldus pageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </li>
                            <li class="accordian-li">
                                <a href="#collapse-template-2" class="accordian" data-bs-toggle="collapse" aria-expanded="false">
                                    <h6 class="acco-text">Why do we use it?</h6>
                                    <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                                <div class="ans-accordian collapse" id="collapse-template-2">
                                    <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                                    <p>Many desktop publishing packages and web page editors now use lorem ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                                </div>
                            </li>
                            <li class="accordian-li">
                                <a href="#collapse-template-3" class="accordian" data-bs-toggle="collapse" aria-expanded="false">
                                    <h6 class="acco-text">Where can i get some?</h6>
                                    <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                                <div class="ans-accordian collapse" id="collapse-template-3">
                                    <p>It uses a dictionary of over 200 latin words, combined with a handful of model sentence structures, to generate lorem ipsum which looks reasonable.</p>
                                    <p>The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                </div>
                            </li>
                            <li class="accordian-li">
                                <a href="#collapse-template-4" class="accordian" data-bs-toggle="collapse" aria-expanded="false">
                                    <h6 class="acco-text">Where does it come from?</h6>
                                    <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                                <div class="ans-accordian collapse" id="collapse-template-4">
                                    <p>Richard mcclintock, a latin professor at hampden-sydney college in virginia, looked up one of the more obscure latin words, consectetur, from a lorem ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                                </div>
                            </li>
                            <li class="accordian-li">
                                <a href="#collapse-template-5" class="accordian" data-bs-toggle="collapse" aria-expanded="false">
                                    <h6 class="acco-text">What is lorem ipsum?</h6>
                                    <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                                <div class="ans-accordian collapse" id="collapse-template-5">
                                    <p>Richard mcclintock, a latin professor at hampden-sydney college in virginia, looked up one of the more obscure latin words, consectetur, from a lorem ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                                </div>
                            </li>
                            <li class="accordian-li">
                                <a href="#collapse-template-6" class="accordian" data-bs-toggle="collapse" aria-expanded="false">
                                    <h6 class="acco-text">Where does it come from?</h6>
                                    <span class="acco-arrow"><i class="bi bi-chevron-down"></i></span>
                                </a>
                                <div class="ans-accordian collapse" id="collapse-template-6">
                                    <p>It has roots in a piece of classical latin literature from 45 BC, making it over 2000 years old.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- return policy end -->
</main>
@endsection