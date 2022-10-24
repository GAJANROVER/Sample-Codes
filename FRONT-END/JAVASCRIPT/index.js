// function myFunction() {
//     document.getElementById('demo').innerHTML = 'GTR';
// }


function print() {
    const b = 'GAJAN', a = 'ROVER';
    let z = b + ' ' + a;
    document.getElementById('demo').innerHTML = z;
}

<input type="text" name="" id="" class="" 
value="<?php echo $amount; ?>" <?php echo ($amount_validation == 1) ? 'readonly' : ''; ?>
    oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" >


        // a tag 
        < a onclick='downloadWordDoc(event)'; class="link-blue" href="#" target="_self" >
            function downloadWordDoc(e) {
                e.preventDefault();
            window.location = '<?php echo Yii::app()->request->baseUrl . ' / empDetails / DownloadSelfRequestedBankChangeDocuments / id / 5 / letterType / 5'; ?>';
        }


