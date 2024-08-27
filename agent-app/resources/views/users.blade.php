@include('header')
<h2>HTML Table</h2>

    <table id="table-users">
    <tr>
        <th>Company</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td>Alfreds Futterkiste</td>
        <td>Maria Anders</td>
        <td>Germany</td>
    </tr>
    
    </table>
</body>
    <script>
        var token = localStorage.getItem('user_token')
         $(document).ready(function(){
            // event.preventDefault()
            $.ajax({
                url:"http://127.0.0.1:8000/api/all-users",
                type:"POST",
                headers:{'Authorization':token},
                success: function(data){
                    $.each(data, function(index, val){
                        var tr = $("<tr></tr>")
                        tr.append("<td>"+val.name+"</td>")
                        tr.append("<td>"+val.email+"</td>")
                        tr.append("<td>"+val.id+"</td>")

                        $('#table-users').append(tr)
                    })
                }
            })
           
            
        })
    </script>
</html>