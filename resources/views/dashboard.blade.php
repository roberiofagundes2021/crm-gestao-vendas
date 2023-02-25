@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
      
        <div class="row justify-content-end mt-0 mr-5 g-5">
              <div class="col justify-content-start text-Secondary float-start ">
            <h1 class="mt-5 ml-5 text-dark display-2">Dashboard</h1>
        </div>
            <div class="offset-2 row-sm-6 text-Secondary">
                    <div class="row-cols-2 justify-content-end ">
                        <div class="row text-dark">
                            <div class="row mt-5">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" 
                                        width="16" height="16" fill="currentColor" class="bi bi-house-door mr-2" viewBox="0 0 16 16">
                                        <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5
                                        7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0
                                            .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5
                                            0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5
                                                0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/> 
                                    </svg> 
                                        / Dashboard
                                </span>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-5 g-5 ">
                <div class="offset-0.7 card mt-0 bg-light">
                        <!--cards -->
                            <div class=" row bg-secondary pl-5">
                                
                                <div class="offset-0.5 card mb-2 bg-secondary mt-1" style="width: 24rem;">
                                        <div class="card-header  ">
                                            <h5 class="card-title text-dark">ECOMMERCE PERSONALIZADO R$ 30.000,00</h5>
                                            <p class="card-text text-dark">R$ 300,00 
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-check-square"
                                                viewBox="0 0 16 16">
                                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1
                                                    1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2
                                                    2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                                    <path d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0
                                                    1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094
                                                        2.093 3.473-4.425a.235.235 0 0 1 .02-.022z"/>
                                                </svg>
                                                asdsdddd
                                                sdffffdsaasddsdsa
                                                ssdaasdsd</p> 
                                        </div>
                                </div>

                                <div class="offset-0.5 card mb-2 bg-secondary mt-1 " style="width: 14rem;">
                                        <div class="card-header text-dark">
                                        
                                            <span>R$ 300,00</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                class="bi bi-check-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75
                                                0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 
                                                1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
                                                </svg>
                                                <!--trofeu-->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                class="bi bi-trophy" viewBox="0 0 16 16">
                                                <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 
                                                .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833
                                                3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5
                                                0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5
                                                13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076
                                                    33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083
                                                    3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056
                                                    1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0
                                                    0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 
                                                    0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9
                                                        10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"/>
                                                </svg>
                                    
                                </div>
                                <div class="row mt-5 ">
                                    <div class="col">
                                        <div class="row ml-1">
                                            <!--whatsap -->
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                        <div class="row ml-1">
                                            <!--telefone-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0
                                        0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547
                                            2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0
                                            .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306
                                            1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846
                                            1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634
                                                0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                        </div>   
                                    </div>
                                </div>


                                <div class="row mt-2">
                                    <div class="col">
                                    <i class="telephone">
                                        <!--microfone -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-mic-fill" viewBox="0 0 16 16">
                                            <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0V3z"/>
                                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0
                                            1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5
                                            0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5z"/>
                                        </svg>
                                        <!--whatsap -->
                                        <i class="fab fa-whatsapp"></i>
                                    <!--telefone-->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0
                                        0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547
                                            2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0
                                            .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306
                                            1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846
                                            1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634
                                                0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                        </svg>
                                        <!-- email-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 
                                        0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13
                                        2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8
                                            9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0
                                            0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                        </svg>
                                                                    
                                        <!-- olhos -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye-fill" viewBox="0 0 16 16">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                    </i>
                                    </div>    
                                </div>      
                                </div>

                                <div class=" card mb-2 bg-secondary mt-0.5" style="width: 24rem;">
                                        <div class="card-header ">
                                        
                                            <span class="offset-0.5 card-text text-dark">ECOMMERCE PERSONALIZADO
                                                <span class="card-text text-sucess">
                                                    R$ 30.000,00
                                                </span>
                                            
                                                asdsdddd
                                                sdffffdsaasddsdsa
                                                ssdaasdsd</span> 
                                        </div>
                                </div>
                            </div>      

                            <div class="row bg-secondary pl-5">
                                
                                <div class="card mb-2 bg-secondary me-2  mt-1 mr-2" style="width: 24rem;">
                                <div class="h1 pt-0 display-4">Metas de Venda</div> 
                                        <div class="card-header text-dark mt-5 pt-0  ">
                                            <!--Barra de progresso-->
                                                <!-- Added heading of the page -->                                         
                                                    <!-- Creating a container class that 
                                                        hold other useful classes -->
                                                    <div class="container mt-5 pt-5">
                                                        <div class="ui-widgets">
                                                            <div class="ui-labels">Porcentagem do Objetivo</div>
                                                            <div class="ui-values">50%</div>
                                                            
                                                        </div>
                                                    </div>
                                            <!--fim da progresso-->
                                        </div>
                                </div>

                                <div class="offset-0.5 card mb-2 bg-secondary mt-1" style="width: 14rem;">
                                        <div class="card-header ">
                                            <h5 class="card-title text-dark ">Balanço</h5>
                                            <h5 class="card-title text-dark ">R$ 27.540,00</h5>
                                            <h5 class="card-title text-dark ">R$ 32.898,00</h5>
                                                asdsdddd
                                                sdffffdsaasddsdsa
                                                ssdaasdsd</p> 
                                        </div>
                                </div>
                                <div class="offset-0.5 card mb-2 bg-secondary mt-1" style="width: 24rem;">
                                        <div class="card-header ">
                                            <h5 class="card-title text-dark">ECOMMERCE PERSONALIZADO</h5>
                                            <p class="card-text text-dark">João Ferreira asddddddddddddddddddddddddd
                                                sdfffddddss
                                                asdsdddd
                                                sdffffdsaasddsdsa
                                                ssdaasdsd</p> 
                                        </div>
                                </div>
                            </div>   
                        <!--fim do cards-->
                
                </div>
        </div>
    
@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush

<!--style-->
    <style>
    /* Apply css properties to h1 element */
h1{
    text-align: center;
    color: black;
    margin-top: 20px;
    
}
  
/* Create a container using css properties */
.container {
    top: 30%;
    left:50%;
    position: absolute;
    text-align: center;
    transform: translate(-50%, -50%);
}
  
/* Apply css properties to ui-widgets class */
.ui-widgets {
    position: relative;
    display: inline-block;
    width: 10rem;
    height: 10rem;
    border-radius: 9rem;
    margin:1.5rem;
    border: 1.2rem solid palegreen;
    box-shadow: inset 0 0 7px grey;
    border-left-color: palegreen;
    border-top-color:chartreuse ;
    border-right-color: darkgreen;
    border-bottom-color: white ;
    text-align: center;
    box-sizing: border-box;
}
  
/* Apply css properties to the second
    child of ui-widgets class */
.ui-widgets:nth-child(2) {
    border-top-color:chartreuse ;
    border-right-color: white;
    border-left-color: palegreen;
    border-bottom-color: white;
}
  
/* Apply css properties to ui-widgets
   class and ui-values class */
.ui-widgets .ui-values {
    top: 40px;
    position: absolute;
    left: 10px;
    right: 0;
    font-weight: 700;
    font-size: 2.0rem;
}
  
/*  Apply css properties to ui-widgets 
class and ui-labels class */
.ui-widgets .ui-labels {
    left: 0;
    bottom: -16px;
    text-shadow: 0 0 4px grey;
    color:black;
    position: absolute;
    width: 100%;
    font-size: 16px;
}
                                            </style>
                                        <!--fim do style -->
