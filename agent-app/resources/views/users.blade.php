@include('header')
<h2>HTML Table</h2>

    <table id="table-users">
    <tr>
        <th>Nom</th>
        <th>Email</th>
    </tr>
    
    
    </table>
</body>
    <script>
        var token = localStorage.getItem('user_token')
         $(document).ready(function(){
            // event.preventDefault()
            $.ajax({
                url:"http://127.0.0.1:8000/api/all-users",
                type:"get",
                headers:{'Authorization':token},
                success: function(data){
                    console.log(data)
                    $.each(data.users, function(index, val){
                        var tr = $("<tr></tr>")
                        tr.append("<td>"+val.name+"</td>")
                        tr.append("<td>"+val.email+"</td>")
                        $('#table-users').append(tr)
                    })
                }
            })
           
            
        })
    </script>
</html>