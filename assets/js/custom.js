$('.fromto').on('change',function(){

    $("option").prop('disabled',false);

    var to=($('#to').val());
    //console.log("#from option[value='"+to+"']");
    $("#from option[value='"+to+"']").prop('disabled',true);

    var from=($('#from').val());
    //console.log("#from option[value='"+from+"']");
    $("#to option[value='"+from+"']").prop('disabled',true);


    convertservice();
});

$("#currency").on('keyup',function(){
    convertservice();
});



function convertservice(){
    var from=$("#from").val();
    var to=$('#to').val();
    var amount=$("#currency").val();


    // console.log(from);
    // console.log(to);
    // console.log(amount);
    var params='from='+from+'&to='+to+'&amount='+amount;
    if(from!='nothing'&&to!='nothing')
    {

        if(amount<=0){
            $('#error').text('Please Enter a number greater than 0');
            return false;
        }

        $('#error').text('');
        //both from and to are selected
        $.ajax({
            url: "convertservice.php",
            data:params,
            async:false,
            success: function(result){
                var res=JSON.parse(result);
                $("#results").html("Total: "+res.result+" <br /> Effective Rate: "+res.rate);



            }
        });

    }
    else{
        $('#error').text('Select both From and TO');
        $('#error').css('color','red');
    }
}