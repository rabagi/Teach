@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <h3>PORT OF LAZARO CARDENAS</h3>
        <strong>
        <p>Dear User:</p>
        <p>The Port of Lazaro Cardenas has been developing port infrastructure projects, this time we want to know your opinion in order to assess the improvement areas, and continue to work to provide the right service for your needs.</p>
        <p>For this reason you are asked their valuable support to answer the following survey.</p>
        </strong>
        <p> It is very important for us to know your perception about the use that you make in our port infrastructure offered for your daily operations. We appreciate your time that is provided to answer the next questions.</p>
            
            @include('partials/errors')
            <form role="form" action=" " method="POST" > 
            {!! csrf_field() !!}
            <div class="panel panel-default">

                <div class="panel-heading">
 
                   <p>
                    Of the next options provide the one that best describes you:
                    </p>
                </div>
                    


                        <div class="radio">
                                <label class="control-label" >
                                <input type="radio" name="a" value="1">
                                Vessel (Captain)
                                </label>
                        </div>
          

                        <div class="radio">
                                <label   class="control-label" >
                                <input type="radio" name="a" value="2">
                                Vessel (First Officer)
                                </label>
                        </div>
                        
                        <div class="radio">
                                <label   class="control-label" >
                                <input type="radio" name="a" value="3">
                                Shipping Agency
                                </label>
                        </div>

                        <div class="radio">
                                <label   class="control-label" >
                                <input type="radio" name="a" value="4">
                                 Pilots of the port
                                </label>
                        </div>
                        
                        <div class="radio">
                                <label   class="control-label" >
                                <input type="radio" name="a" value="5">
                                Harbor Master
                                </label>
                        </div>
                        
                        <div class="radio">
                                <label   class="control-label" >
                                <input type="radio" name="a" value="6">
                                PSP lighterage
                                </label>
                        </div>
                        
                        <div class="radio">
                                <label   class="control-label" >
                                <input type="radio" name="a" value="7">
                                Tugs
                                </label>
                        </div>

                        <div class="radio">
                                <label   class="control-label" >
                                <input type="radio" name="a" value="8">
                                Other (please specify)
                                </label>
                        </div>                        
                            
       
          
            </div> <!-- fin panel -->



            <div class="panel panel-default">

                <div class="panel-heading"> 
                   <p>
                    According to the next scale, How would you grade the next aspects related with the port infrastructure that our port counts with: (check one box per item) (*)
                    </p>
                </div>

                <div class="panel-body">

                <div class="row"> 
                    <div class="col-xs-3">                 
                    </div>

                    <div class="col-xs-3">                          
                               Excellent(more than 95%)
                    </div>
                    <div class="col-xs-3">
                                Good(more than 90%)          
                    </div>
                    <div class="col-xs-3">
                               Regular(more than 85%)                      
                    </div>
                </div>
                
                    
                <div class="row"> 
                    <div class="col-xs-3">
                        <label>Turning Basin</label>
                   </div>

                    <div class="col-xs-3">
                        <div class="radio">
                            <label   class="control-label" >                 
                                <input type="radio" name="b" value="1">
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-3">
                         <div class="radio">
                            <label   class="control-label" >                  
                                <input type="radio" name="b" value="2">
                             </label>
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <div class="radio">
                            <label   class="control-label" >                          
                                <input type="radio" name="b" value="3">
                            </label>
                        </div>                      
                    </div>

                </div>

                </div><!--  panel body -->

                </div> <!-- panel default -->
          
                 <button type="submit" class="btn btn-default">Finalizar encuesta</button>
                </div> <!-- fin panel -->



             
        </form>
        </div>
    </div>
</div>

@endsection