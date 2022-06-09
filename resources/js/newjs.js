$(function() {
    var btn = document.querySelector('.btn');
    btn.onclick = function(e){
        $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        $.ajax({
            url: "/compile",
            dataType: 'json',
            data: {code:code.value},
            method: "post",
            success: function(response){
                response.output.forEach(element => console.log(element));
                var arr = Object.values(response.output);

                document.getElementById('result').value = "";
                for(var i in arr){
                    document.getElementById('result').value = document.getElementById('result').value + arr[i] + '\n';
                }
            }, 
            error: function(response){
                console.log("error");
            }
        })
    }
});

