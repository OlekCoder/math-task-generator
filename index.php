<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Poziom trudności:<br>
        Normalny:
        <input checked required type="radio" name="difficultyLevel" value="easy" <?php if(isset($_POST['difficultyLevel']) && $_POST['difficultyLevel'] == "easy") {echo 'checked';}?>><br>
        Trudny:
        <input required type="radio" name="difficultyLevel" value="hard" <?php if(isset($_POST['difficultyLevel']) && $_POST['difficultyLevel'] == "hard") {echo 'checked';}?>></br>
        <input type="checkbox" name="additionChecked" value="True" <?php if(isset($_POST['additionChecked']) && $_POST['additionChecked'] == true) {echo 'checked';}?>>
        Podaj zakres dodawania od:
        <input type="number" name="additionRangeMin" value="<?php if(isset($_POST['additionRangeMin']) && $_POST['additionRangeMin'] == true) {echo $_POST['additionRangeMin'];} else {echo null;}?>">
        do:
        <input type="number" name="additionRangeMax" value="<?php if(isset($_POST['additionRangeMax']) && $_POST['additionRangeMax'] == true) {echo $_POST['additionRangeMax'];} else {echo null;}?>">
        trzy liczby:
        <input type="checkbox" name="thirdNumberAddition" value="True" <?php if(isset($_POST['thirdNumberAddition']) && $_POST['thirdNumberAddition'] == true) {echo 'checked';}?>></br>
        <input type="checkbox" name="subtractionChecked" value="True" <?php if(isset($_POST['subtractionChecked']) && $_POST['subtractionChecked'] == true) {echo 'checked';}?>>
        Podaj zakres odejmowania od:
        <input type="number" name="subtractionRangeMin" value="<?php if(isset($_POST['subtractionRangeMin']) && $_POST['subtractionRangeMin'] == true) {echo $_POST['subtractionRangeMin'];} else {echo null;}?>">
        do:
        <input type="number" name="subtractionRangeMax" value="<?php if(isset($_POST['subtractionRangeMax']) && $_POST['subtractionRangeMax'] == true) {echo $_POST['subtractionRangeMax'];} else {echo null;}?>">
        trzy liczby:
        <input type="checkbox" name="thirdNumberSubtraction" value="True" <?php if(isset($_POST['thirdNumberSubtraction']) && $_POST['thirdNumberSubtraction'] == true) {echo 'checked';}?>></br>
        <input type="checkbox" name="multiplicationChecked" value="True" <?php if(isset($_POST['multiplicationChecked']) && $_POST['multiplicationChecked'] == true) {echo 'checked';}?>>
        Podaj zakres mnożenia od:
        <input type="number" name="multiplicationRangeMin" value="<?php if(isset($_POST['multiplicationRangeMin']) && $_POST['multiplicationRangeMin'] == true) {echo $_POST['multiplicationRangeMin'];} else {echo null;}?>">
        do:
        <input type="number" name="multiplicationRangeMax" value="<?php if(isset($_POST['multiplicationRangeMax']) && $_POST['multiplicationRangeMax'] == true) {echo $_POST['multiplicationRangeMax'];} else {echo null;}?>">
        trzy liczby: 
        <input type="checkbox" name="thirdNumberMultiplication" value="True" <?php if(isset($_POST['thirdNumberMultiplication']) && $_POST['thirdNumberMultiplication'] == true) {echo 'checked';}?>></br>

        <input type="checkbox" name="divisionChecked" value="True" <?php if(isset($_POST['divisionChecked']) && $_POST['divisionChecked'] == true) {echo 'checked';}?>>
        Podaj zakres dzielenia od:
        <input type="number" name="divisionRangeMin" value="<?php if(isset($_POST['divisionRangeMin']) && $_POST['divisionRangeMin'] == true) {echo $_POST['divisionRangeMin'];} else {echo null;}?>">
        do:
        <input type="number" name="divisionRangeMax" value="<?php if(isset($_POST['divisionRangeMax']) && $_POST['divisionRangeMax'] == true) {echo $_POST['divisionRangeMax'];} else {echo null;}?>">
        trzy liczby:
        <input type="checkbox" name="thirdNumberDivision" value="True" <?php if(isset($_POST['thirdNumberDivision']) && $_POST['thirdNumberDivision'] == true) {echo 'checked';}?>></br>

        Czy mogą się powtarzać
        <input type="checkbox" name="canRepeat" value="True" <?php if(isset($_POST['canRepeat']) && $_POST['canRepeat'] == true) {echo 'checked';}?>></br>
        Czy może wyjść zero:
        <input type="checkbox" name="canBeZero" value="True" <?php if(isset($_POST['canBeZero']) && $_POST['canBeZero'] == true) {echo 'checked';}?>></br>
        Czy Wymieszać wynik: 
        <input type="checkbox" name="shuffleOption" value="True" <?php if(isset($_POST['shuffleOption']) && $_POST['shuffleOption'] == true) {echo 'checked';}?>></br>
        Wybierz którą klasę:
        <select name="whichClass">
            <option value="1" <?php if(isset($_POST['whichClass']) && $_POST['whichClass'] == 1) {echo 'selected';}?>>1</option>
            <option value="2" <?php if(isset($_POST['whichClass']) && $_POST['whichClass'] == 2) {echo 'selected';}?>>2</option>
            <option value="3" <?php if(isset($_POST['whichClass']) && $_POST['whichClass'] == 3) {echo 'selected';}?>>3</option>
            <option value="4" <?php if(isset($_POST['whichClass']) && $_POST['whichClass'] == 4) {echo 'selected';}?>>bez limitu</option>
        </select></br>

        Podaj ile zadań:
        <input type="number" name="taskNumber" value="<?php if(isset($_POST['taskNumber']) && $_POST['taskNumber'] == true) {echo $_POST['taskNumber'];} else {echo null;}?>">
        

        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $i = 0;
            $iterationLimit = 100000;
            $singleTaskTypeNumber = 0;




            $taskNumber = $_POST['taskNumber'];
            $additionRangeMin = $_POST['additionRangeMin'];
            $additionRangeMax = $_POST['additionRangeMax'];
            $subtractionRangeMin = $_POST['subtractionRangeMin'];
            $subtractionRangeMax = $_POST['subtractionRangeMax'];
            $multiplicationRangeMin = $_POST['multiplicationRangeMin'];
            $multiplicationRangeMax = $_POST['multiplicationRangeMax'];
            $divisionRangeMin = $_POST['divisionRangeMin'];
            $divisionRangeMax = $_POST['divisionRangeMax'];
            $classLimit = $_POST['whichClass'];
            $difficultyLevel = $_POST['difficultyLevel'];



            $canRepeat = False;
            $canBeZero = False;
            $shuffleOutput = False;
            $thirdNumberAddition = False;
            $thirdNumberSubtraction = False;
            $thirdNumberMultiplication = False;
            $thirdNumberDivision = False;




            $resultArray = [];
            $additionArray = [];
            $subtractionArray = [];
            $multiplicationArray = [];
            $divisionArray = [];


            if(isset($_POST['additionChecked']) && $_POST['additionChecked'] == True){
                $addition = True;
                $i++;
            }else{
                $addition = False;
            }
        
            if(isset($_POST['subtractionChecked']) && $_POST['subtractionChecked'] == True){
                $subtraction = True;
                $i++;
            }else{
                $subtraction = False;
            }
            
            if(isset($_POST['multiplicationChecked']) && $_POST['multiplicationChecked'] == True){
                $multiplication = True;
                $i++;
            }else{
                $multiplication = False;
            }
            
            if(isset($_POST['divisionChecked']) && $_POST['divisionChecked'] == True){
                $division = True;
                $i++;
            }else{
                $division = False;
            }

            if(isset($_POST['canRepeat']) && $_POST['canRepeat'] == True){
                $canRepeat = True;
            }
            
            if(isset($_POST['canBeZero']) && $_POST['canBeZero'] == True){
                $canBeZero = True;
            }

            if(isset($_POST['shuffleOption']) && $_POST['shuffleOption'] == True){
                $shuffleOutput = True;
            }
            
            if(isset($_POST['thirdNumberAddition']) && $_POST['thirdNumberAddition'] == True){
                $thirdNumberAddition = True;
            }
            if(isset($_POST['thirdNumberSubtraction']) && $_POST['thirdNumberSubtraction'] == True){
                $thirdNumberSubtraction = True;
            }
            if(isset($_POST['thirdNumberMultiplication']) && $_POST['thirdNumberAddition'] == True){
                $thirdNumberMultiplication = True;
            }
            if(isset($_POST['thirdNumberDivision']) && $_POST['thirdNumberDivision'] == True){
                $thirdNumberDivision = True;
            }

            if($classLimit == 1){
                $limit = 30;
            }elseif($classLimit == 2){
                $limit = 100;
            }elseif($classLimit == 3){
                $limit = 1000;
            }else{
                $limit = 100000000000;
            }

            
            
            if($taskNumber == null){
                echo '<span style="color:#FF0000">!Podaj ile zadań ma zostać wygenerowane!</span>';
            }else{
               if($i == 0){
                echo"Nie zaznaczono żadnych działań";
                }else{
                    $singleTaskTypeNumber = $taskNumber / $i;
                    $singleTaskTypeNumber = round($singleTaskTypeNumber);
                }
    
            }
            function addition($singleTaskTypeNumber, $additionRangeMin, $thirdNumberAddition,  $additionRangeMax, $limit, $canRepeat, $canBeZero, &$additionArray, $iterationLimit, $difficultyLevel){
                if($additionRangeMin == null || $additionRangeMax == null){
                    exit("Podaj prawidłowy zakres");
                }
                
                $tempAdditionArray = [];
                for($i = 0, $j = 0; $i < $singleTaskTypeNumber; $i++, $j++){
                    if($thirdNumberAddition == true){
                        $x1 = rand($additionRangeMin, $additionRangeMax);
                        $x2 = rand($additionRangeMin, $additionRangeMax);
                        $x3 = rand($additionRangeMin, $additionRangeMax);
                        $additionResult = $x1 + $x2 + $x3;
                        if($x1 >= $x2 && $x2 >= $x3){
                            $xb = $x1;
                            $xm = $x2;
                            $xs = $x3;
                        }else{
                            $xb = $x3;
                            $xm = $x2;
                            $xs = $x1;
                        }

                        if($difficultyLevel == 'easy'){
                            $number1 = substr($x1 , -1);
                            $number2 = substr($x2, -1);
                            $number3 = substr($x3, -1);
                            $number4 = substr($x1 , -2, 1);
                            $number5 = substr($x2 , -2, 1);
                            $number6 = substr($x3 , -2, 1);
                            $number7 = substr($x1 , -3, 1);
                            $number8 = substr($x2 , -3, 1);
                            $number9 = substr($x3 , -3, 1);
                            $number10 = substr($x1 , -4, 1);
                            $number11 = substr($x2 , -4, 1);
                            $number12 = substr($x3 , -4, 1);
                            if(($number1 + $number2 + $number3) > 9){
                                $i--;
                                continue;
                            }
                            elseif(($number4 + $number5 + $number6) > 9){
                                $i--;
                                continue;
                            }
                            elseif(($number7 + $number8 + $number9) > 9){
                                $i--;
                                continue;
                            }elseif(($number10 + $number11 + $number12) > 9){
                                $i--;
                                continue;
                            }
                        }
                        $difference = $xb - $xm - $xs;

                        if($j == $iterationLimit){
                            return $additionArray;
                        }

                        if($difference > 15){
                            $i--;
                        }elseif($additionResult > $limit){
                            $i--;
                        }else{
                            if($canRepeat == false){
                                $isDuplicate = false;
                                foreach ($additionArray as $existingArray) {
                                    if ($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['number3'] == $x3 && $existingArray['result'] == $additionResult) {
                                        $isDuplicate = true;
                                        $i--;
                                    }
                                }
                                if (!$isDuplicate) {
                                    $tempAdditionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'number3' => $x3,
                                    'sign' => "+",
                                    'result' => $additionResult,
                                ];
                                    $additionArray[] = $tempAdditionArray;
                                }
                            }else{
                                $tempAdditionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'number3' => $x3,
                                    'sign' => "+",
                                    'result' => $additionResult,
                                ];
                                $additionArray[] = $tempAdditionArray;
                            }
                        }
                    }else{

                        $x1 = rand($additionRangeMin, $additionRangeMax);
                        $x2 = rand($additionRangeMin, $additionRangeMax);

                        if($difficultyLevel == 'easy'){
                            $number1 = substr($x1 , -1);
                            $number2 = substr($x2, -1);
                            $number3 = substr($x1 , -2, 1);
                            $number4 = substr($x2 , -2, 1);
                            $number5 = substr($x1 , -3, 1);
                            $number6 = substr($x2 , -3, 1);
                            if(($number1 + $number2) > 9){
                                $i--;
                                continue;
                            }
                            elseif(($number3 + $number4) > 9){
                                $i--;
                                continue;
                            }
                            elseif(($number5 + $number6) > 9){
                                $i--;
                                continue;
                            }
            
                
                        }


                        $additionResult = $x1 + $x2;
                        if($x1 >= $x2){
                            $xb = $x1;
                            $xs = $x2;
                        }else{
                            $xb = $x2;
                            $xs = $x1;
                        }
                        $difference = $xb - $xs;

                        if($j == $iterationLimit){
                            return $additionArray;
                        }
            
                        if($difference > 15){
                            $i--;
                        }elseif($additionResult > $limit){
                            $i--;
                        }else{
                            if($canRepeat == false){
                                $isDuplicate = false;
                                foreach ($additionArray as $existingArray) {
                                    if ($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['result'] == $additionResult) {
                                        $isDuplicate = true;
                                        $i--;
                                    }
                                }
                                if (!$isDuplicate) {
                                    $tempAdditionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'sign' => "+",
                                    'result' => $additionResult,
                                ];
                                    $additionArray[] = $tempAdditionArray;
                                }
                            }else{
                                $tempAdditionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'sign' => "+",
                                    'result' => $additionResult,
                                ];
                                $additionArray[] = $tempAdditionArray;
                            }
                        }
                    }
                }
            }

            function subtraction($subtractionRangeMin, $subtractionRangeMax, $singleTaskTypeNumber, $canBeZero, $canRepeat, &$subtractionArray, $iterationLimit, $thirdNumberSubtraction){
                if($subtractionRangeMin == null || $subtractionRangeMax == null){
                    exit("Podaj prawidłowy zakres");
                }
                $tempSubtractionArray =[];
                for($i = 0, $j = 0; $i < $singleTaskTypeNumber; $i++, $j++){
                    $x1 = rand($subtractionRangeMin, $subtractionRangeMax);
                    $x2 = rand($subtractionRangeMin, $subtractionRangeMax);
                    if($thirdNumberSubtraction == true){
                        $x3 = rand($subtractionRangeMin, $subtractionRangeMax);
                        $subtractionResult = $x1 - $x2 - $x3;
                    }else{
                        $subtractionResult = $x1 - $x2;
                    }
                    if($j == $iterationLimit){
                        return $subtractionArray;
                    }
                    if($canRepeat == FALSE){
                        $isDuplicate = false;
                        if($canBeZero == false){
                            if($subtractionResult <=1){
                                $i--;
                            }else{
                                if($thirdNumberSubtraction == false){
                                    foreach($subtractionArray as $existingArray){
                                        if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['result'] == $subtractionResult){
                                            $isDuplicate = True;
                                            $i--;
                                        }
                                    }
                                    if(!$isDuplicate){
                                        $tempSubtractionArray =[
                                            'number1' => $x1,
                                            'number2' => $x2,
                                            'sign' => '-',
                                            'result' => $subtractionResult,
                                        ];
                                        $subtractionArray[] = $tempSubtractionArray;
                                    }
                                }else{
                                    foreach($subtractionArray as $existingArray){
                                        if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['number3'] == $x3 && $existingArray['result'] == $subtractionResult){
                                            $isDuplicate = True;
                                            $i--;
                                        }
                                    }
                                    if(!$isDuplicate){
                                        $tempSubtractionArray =[
                                            'number1' => $x1,
                                            'number2' => $x2,
                                            'number3' => $x3,
                                            'sign' => '-',
                                            'result' => $subtractionResult,
                                        ];
                                        $subtractionArray[] = $tempSubtractionArray;
                                    }
                                }
                            }  
                        }else{
                            if($thirdNumberSubtraction == false){
                                foreach($subtractionArray as $existingArray){
                                    if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['result'] == $subtractionResult){
                                        $isDuplicate = True;
                                        $i--;
                                    }
                                }
                                if(!$isDuplicate){
                                    $tempSubtractionArray =[
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'sign' => '-',
                                        'result' => $subtractionResult,
                                    ];
                                    $subtractionArray[] = $tempSubtractionArray;
                                }
                            }else{
                                foreach($subtractionArray as $existingArray){
                                    if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['number3'] == $x3 && $existingArray['result'] == $subtractionResult){
                                        $isDuplicate = True;
                                        $i--;
                                    }
                                }
                                if(!$isDuplicate){
                                    $tempSubtractionArray =[
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'number3' => $x3,
                                        'sign' => '-',
                                        'result' => $subtractionResult,
                                    ];
                                    $subtractionArray[] = $tempSubtractionArray;
                                }
                            }
                        }
                    }else{
                        if($canBeZero == false){
                            if($thirdNumberSubtraction == false){
                                if($subtractionResult <=0 || $subtractionResult == 1 ){
                                    $i--;
                                }else{
                                    $tempSubtractionArray =[
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'sign' => '-',
                                        'result' => $subtractionResult,
                                    ];
                                    $subtractionArray[] = $tempSubtractionArray;
                                }
                            }else{
                                if($subtractionResult <=0 || $subtractionResult == 1 ){
                                    $i--;
                                }else{
                                    $tempSubtractionArray =[
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'number3' => $x3,
                                        'sign' => '-',
                                        'result' => $subtractionResult,
                                    ];
                                    $subtractionArray[] = $tempSubtractionArray;
                                }
                            }
                        }else{
                            if($thirdNumberSubtraction == false){
                                $tempSubtractionArray =[
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'sign' => '-',
                                    'result' => $subtractionResult,
                                ];
                                $subtractionArray[] = $tempSubtractionArray;
                            }else{
                                $tempSubtractionArray =[
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'number3' => $x3,
                                    'sign' => '-',
                                    'result' => $subtractionResult,
                                ];
                                $subtractionArray[] = $tempSubtractionArray;
                            }
                        } 
                    }
                }
            }








            function multiplication($multiplicationRangeMin, $multiplicationRangeMax, $singleTaskTypeNumber, $limit, $canBeZero, $canRepeat, &$multiplicationArray, $iterationLimit, $difficultyLevel, $thirdNumberMultiplication){
                if($multiplicationRangeMin == null || $multiplicationRangeMax == null){
                    exit("Podaj prawidłowy zakres");
                }
                $tempMultiplactionArray = [];
                for($i = 0 , $j = 0; $i < $singleTaskTypeNumber; $i++,$j++){
                    $x1 = rand($multiplicationRangeMin, $multiplicationRangeMax);
                    $x2 = rand($multiplicationRangeMin, $multiplicationRangeMax);

                    if($thirdNumberMultiplication == true){
                        $x3 = rand($multiplicationRangeMin, $multiplicationRangeMax);
                        $multiplicationResult = $x1 * $x2 * $x3;

                    }else{
                        $multiplicationResult = $x1 * $x2;
                    }

                    if($j == $iterationLimit){
                        return $multiplicationArray;
                    }
                    if($multiplicationResult > $limit){
                        $i--;
                    }elseif($x1 == 1 || $x2 == 1){
                        $i--;
                    }else{
                        $isDuplicate = false;
                        if($canRepeat == false){
                            if($thirdNumberMultiplication == false){
                                foreach($multiplicationArray as $existingArray){
                                    if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['result'] == $multiplicationResult){
                                        $isDuplicate = true;
                                        $i--;
                                    }
                                }
                                if(!$isDuplicate){
                                    $tempMultiplactionArray = [
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'sign' => '*',
                                        'result' => $multiplicationResult
                                    ];
                                    $multiplicationArray[] = $tempMultiplactionArray;
                                }
                            }else{
                                foreach($multiplicationArray as $existingArray){
                                    if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['number3'] == $x3 && $existingArray['result'] == $multiplicationResult){
                                        $isDuplicate = true;
                                        $i--;
                                    }
                                }
                                if(!$isDuplicate){
                                    $tempMultiplactionArray = [
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'number3' => $x3,
                                        'sign' => '*',
                                        'result' => $multiplicationResult
                                    ];
                                    $multiplicationArray[] = $tempMultiplactionArray;
                                }
                            }
                        }else{
                            if($thirdNumberMultiplication == false){
                                $tempMultiplactionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'sign' => '*',
                                    'result' => $multiplicationResult,
                                    ];
                                $multiplicationArray[] = $tempMultiplactionArray;  
                            }else{
                                $tempMultiplactionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'number3' => $x3,
                                    'sign' => '*',
                                    'result' => $multiplicationResult,
                                    ];
                                $multiplicationArray[] = $tempMultiplactionArray;  
                            }
                        }
                        
                    }
                }
            }














            function division($divisionRangeMin, $divisionRangeMax, $singleTaskTypeNumber, $canBeZero, $canRepeat, &$divisionArray, $iterationLimit, $thirdNumberDivision){
                if($divisionRangeMin == null || $divisionRangeMax == null){
                    exit("Podaj prawidłowy zakres");
                }
                
                $tempDivisionArray = [];
                for($i = 0, $j = 0; $i < $singleTaskTypeNumber; $i++, $j++){
                    $x1 = rand($divisionRangeMin, $divisionRangeMax);
                    $x2 = rand($divisionRangeMin, $x1);
                    if($thirdNumberDivision == true){
                        $x3 = rand($divisionRangeMin, $x2);
                        $divisionResult = $x1 / $x2 / $x3;
                    }else{
                        $divisionResult = $x1 / $x2; 
                    }

                    if($j == $iterationLimit){
                        return $divisionArray;
                    }
                    if(is_int($divisionResult) == false){
                        $i--;
                    }elseif($x1 == 0 || $x2 == 0 || $x3 == 0 || $divisionResult == 0 || $divisionResult == 1 || $divisionResult == 2 || $x1 == $x2 || $x1 == 1 || $x2 == 1 || $x3 == 1 || $x3 == $x2 || $x1 == $x3){
                        $i--;
                    }else{
                        $isDuplicate = false;
                        if($canRepeat == false){
                            if($thirdNumberDivision == false){
                                foreach($divisionArray as $existingArray){
                                    if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 && $existingArray['result'] == $divisionResult){
                                        $isDuplicate = true;
                                        $i--;
                                    }
                                }
                                if(!$isDuplicate){
                                    $tempDivisionArray = [
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'sign' => ':',
                                        'result' => $divisionResult,
                                    ];
                                    $divisionArray[] = $tempDivisionArray;
                                }
                            }else{
                                foreach($divisionArray as $existingArray){
                                    if($existingArray['number1'] == $x1 && $existingArray['number2'] == $x2 &&  $existingArray['number3'] == $x3 && $existingArray['result'] == $divisionResult){
                                        $isDuplicate = true;
                                        $i--;
                                    }
                                }
                                if(!$isDuplicate){
                                    $tempDivisionArray = [
                                        'number1' => $x1,
                                        'number2' => $x2,
                                        'number3' => $x3,
                                        'sign' => ':',
                                        'result' => $divisionResult,
                                    ];
                                    $divisionArray[] = $tempDivisionArray;
                                }
                            }
                        }else{
                            if($thirdNumberDivision == false){
                                $tempDivisionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'sign' => ':',
                                    'result' => $divisionResult,
                                ];
                                $divisionArray[] = $tempDivisionArray;                                
                            }else{
                                $tempDivisionArray = [
                                    'number1' => $x1,
                                    'number2' => $x2,
                                    'number3' => $x3,
                                    'sign' => ':',
                                    'result' => $divisionResult,
                                ];
                                $divisionArray[] = $tempDivisionArray;   
                            }
                        }
                    }
                }
            }            
            if(isset($_POST['additionChecked']) && $_POST['additionChecked'] == True){
                addition($singleTaskTypeNumber, $additionRangeMin, $thirdNumberAddition, $additionRangeMax, $limit, $canRepeat, $canBeZero, $additionArray, $iterationLimit, $difficultyLevel);
            }
            
            if(isset($_POST['subtractionChecked']) && $_POST['subtractionChecked'] == True){
                subtraction($subtractionRangeMin, $subtractionRangeMax, $singleTaskTypeNumber, $canBeZero, $canRepeat, $subtractionArray, $iterationLimit, $thirdNumberSubtraction);   
            }
            
            if(isset($_POST['multiplicationChecked']) && $_POST['multiplicationChecked'] == True){
                multiplication($multiplicationRangeMin, $multiplicationRangeMax, $singleTaskTypeNumber, $limit, $canBeZero, $canRepeat, $multiplicationArray, $iterationLimit, $difficultyLevel, $thirdNumberMultiplication);
            }
            
            if(isset($_POST['divisionChecked']) && $_POST['divisionChecked'] == True){
                division($divisionRangeMin, $divisionRangeMax, $singleTaskTypeNumber, $canBeZero, $canRepeat, $divisionArray, $iterationLimit, $thirdNumberDivision);
            }
            $resultArray = array_merge($additionArray, $subtractionArray, $multiplicationArray, $divisionArray);
            if($shuffleOutput == True){
                shuffle($resultArray);
            }

            $temp = $singleTaskTypeNumber * $i;
            if($temp > $taskNumber && $temp > 0){
                $extra = $temp - $taskNumber;
                array_splice($resultArray, -$extra);
                echo "<pre>";
                print_r($resultArray);
                echo "</pre>";
            }elseif($temp == 0){
                
            }else{
                echo "<pre>";
                print_r($resultArray);
                echo "</pre>";
            }
        }
    ?>
</body>
</html>