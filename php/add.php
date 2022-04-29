<?php
session_start();
/* print_r($_SESSION); */

include 'header.php';

?>

<div class="container">
    <div class="row">
        <div class="col"></div> <!-- start invisible col -->

        <div class="col-xl-6 max-vh-100 quizContainer"> <!-- quiz container -->
        <form action="/php/result.php" method="POST">
            <div class="row m-0"> <!-- quiz header block -->    
               
                <div class="col colHeader d-sm-flex m-0 p-0">

                    <div class="col-auto d-flex align-items-center m-0 p-0">
                        <h5 class="m-0 p-0">Quiz Generator</h5> <!-- title text -->
                    </div>
                    
                    <div class="col d-flex justify-content-end"> <!-- header whole button box -->
                    
                        <div class="col-auto d-flex justify-content-end"> <!-- header new quiz box-->
                            <input type="text" class="amountQuestions form-control me-2 border-dark" name="aq" placeholder=""> 
                            <button type="submit" class="btn btn-dark d-none d-sm-block me-2" name="newQuiz" value="1">New Question(s)</button> <!-- button new quiz - show if bigger than sm-->
                            <button type="submit" class="btn btn-dark me-2 d-block d-sm-none" name="newQuiz" value="1">New</button> <!-- button new quiz - show if smaller than sm-->
                        </div>

                        <div class="col-auto d-flex justify-content-end"> <!-- header add quiz box -->
                            <button type="submit" class="btn btn-dark d-none d-sm-block" name="addQuestion" value="1" disabled>Add Question</button> <!-- button create quiz - show if bigger than sm-->
                            <button type="submit" class="btn btn-dark d-block d-sm-none" name="addQuestion" value="1" disabled>+</button> <!-- button create quiz - show if smaller than sm-->
                        </div>
                    </div>
                    </form>
        
                </div>                                  
            </div>
            
            <div class="row questionBox mx-0 mt-2"> <!-- quiz question block -->

            <form action="/php/create.php" method="POST">
            
                <div class="col">
              
                <div class="my-2 mx-4">
    
                <label for="q">Your Question:</label>
      <textarea class="form-control" rows="2" id="q" name="q"></textarea>

</div>
                    
                </div>
            </div>

            <div class="row mx-0 mt-"> <!-- quiz answer/footer block -->                

                    <div class="row answerBox mt-1 mx-0"> <!-- quiz answer block --> 
                        <div class="col-sm-lg">
                            
                            <div class="my-2"></div>
                                
                                <?php

                                echo "
                                <div class='form-check'>
                                    <label class='form-check-label' for='a1t'>Answer 1 - Put a tick if the question is correct:</label>
                                    <div class='d-flex align-items-center'>
                                        <input type='checkbox' class='form-check-input me-2' id='a1' name='a1c' value='1'>
                                        <input type='text' class='form-control' id='a1' name='a1t'>
                                    </div>
                                </div>
                
                                <div class='my-2'></div>
                                
                                <div class='form-check'>
                                    <label class='form-check-label' for='a1t'>Answer 2 - Put a tick if the question is correct:</label>
                                    <div class='d-flex align-items-center'>
                                        <input type='checkbox' class='form-check-input me-2' id='a2' name='a2c' value='1'>
                                        <input type='text' class='form-control' id='a2' name='a2t'>
                                    </div>
                                </div>

                                <div class='my-2'></div>

                                <div class='form-check'>
                                    <label class='form-check-label' for='a1t'>Answer 3 - Put a tick if the question is correct:</label>
                                    <div class='d-flex align-items-center'>
                                        <input type='checkbox' class='form-check-input me-2' id='a3' name='a3c' value='1'>
                                        <input type='text' class='form-control' id='a3' name='a3t'>
                                    </div>
                                </div>

                                <div class='my-2'></div>

                                <div class='form-check'>
                                    <label class='form-check-label' for='a1t'>Answer 4 - Put a tick if the question is correct:</label>
                                    <div class='d-flex align-items-center'>
                                        <input type='checkbox' class='form-check-input me-2' id='a4' name='a4c' value='1'>
                                        <input type='text' class='form-control' id='a4' name='a4t'>
                                    </div>
                                </div>
                                ";
                                ?>
                            
                            <div class="my-3"></div>

                        </div>

                    </div>
                </div>               

                    <div class="row mt-2"> <!-- quiz footer block -->   
                        <div class="col d-flex justify-content-between">
                            <button type="reset" class="btn btn-danger">Reset</button> <!-- button new quiz -->      
                            <button type="submit" class="btn btn-success">Send</button> <!-- button create quiz -->
                        </div>
                    </div>
                </form>

            </div>
            <div class="col"></div> <!-- end invisible col -->
    </div>
</div>

<?php
unset($_SESSION['q']);
unset($_SESSION['a1']);
unset($_SESSION['a2']);
unset($_SESSION['a3']);
unset($_SESSION['a4']);

/*
echo "<pre>";
print_r($_SESSION);
print_r($_POST);
echo "</pre>"
*/
?>

</body>
</html>