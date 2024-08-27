@include('header')
    <h1>Profile user</h1>
    <BUTton class="logout text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M186.67-120q-27 0-46.84-19.83Q120-159.67 120-186.67v-586.66q0-27 19.83-46.84Q159.67-840 186.67-840h292.66v66.67H186.67v586.66h292.66V-120H186.67Zm470.66-176.67-47-48 102-102H360v-66.66h351l-102-102 47-48 184 184-182.67 182.66Z"/></svg>
    Logout</BUTton>
    <BUTton class="form-show text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M160-120v-142l556.33-556q11.34-11.33 24-16.67Q753-840 766.67-840q13.33 0 25.83 5.33Q805-829.33 816-818l42 42q11.33 10.33 16.67 22.83 5.33 12.5 5.33 26.5 0 13-5.33 26-5.34 13-16.67 24.34L302-120H160Zm66.67-66.67h48l428.33-428L679-639l-24.33-24-428 428.33v48Zm587.33-539L765.67-774 814-725.67ZM679-639l-24.33-24L703-614.67 679-639ZM560-120q76.67 0 138.33-36.67Q760-193.33 760-260q0-38.67-26-69.67t-78.67-50l-51 51q41 11.34 65 30 24 18.67 24 38.67 0 29-39.16 51.17Q615-186.67 560-186.67q-13.67 0-23.5 9.5t-9.83 23.84q0 13.66 9.83 23.5Q546.33-120 560-120ZM221-418l52-52q-42.67-11.33-64.5-23.83-21.83-12.5-21.83-26.17 0-14.67 20.33-28.33Q227.33-562 291.33-587q84.67-33.33 113.34-62.67 28.66-29.33 28.66-69.66 0-55.67-42-88.17T280-840q-43 0-77.5 15t-52.17 37.33q-9 10.34-8 23.67 1 13.33 12.67 22 11 9 24.67 7.33 13.66-1.66 22.66-10.66 14.67-14.67 33-21.34 18.34-6.66 44.67-6.66 44.33 0 65.5 16t21.17 38q0 18-18.5 31.83-18.5 13.83-83.5 39.5-89.34 34.33-117 62.5Q120-557.33 120-520q0 32 24.33 59.5Q168.67-433 221-418Z"/></svg>
        Edite</BUTton>
    <BUTton class="form-add text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#000000"><path d="M726.67-400v-126.67H600v-66.66h126.67V-720h66.66v126.67H920v66.66H793.33V-400h-66.66ZM360-480.67q-66 0-109.67-43.66Q206.67-568 206.67-634t43.66-109.67Q294-787.33 360-787.33t109.67 43.66Q513.33-700 513.33-634t-43.66 109.67Q426-480.67 360-480.67ZM40-160v-100q0-34.67 17.5-63.17T106.67-366q70.66-32.33 130.89-46.5 60.22-14.17 122.33-14.17T482-412.5q60 14.17 130.67 46.5 31.66 15 49.5 43.17Q680-294.67 680-260v100H40Zm66.67-66.67h506.66V-260q0-14.33-7.83-27t-20.83-19q-65.34-31-116.34-42.5T360-360q-57.33 0-108.67 11.5Q200-337 134.67-306q-13 6.33-20.5 19t-7.5 27v33.33ZM360-547.33q37 0 61.83-24.84Q446.67-597 446.67-634t-24.84-61.83Q397-720.67 360-720.67t-61.83 24.84Q273.33-671 273.33-634t24.84 61.83Q323-547.33 360-547.33Zm0-86.67Zm0 407.33Z"/></svg>        Add</BUTton>
    
    <main>
        <p>nom : <span class="nom"></span></p>
        <p>email : <span class="email"></span></p>
        

        <form id="form-edit" action="" method="post" class="hidden">
            @csrf
            @method('post')
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="mail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@zou.com" required />
            </div>
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                <input type="text" name="name" id="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
            </div>
            <input type="hidden" name="id" class="id">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>

        

        <form id="form-store" method="post" class="hidden max-w-sm mx-auto">
            @csrf 
            @method('post')
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your name</label>
            <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name" required />
        </div>
        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@cd.com" required />
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" id="password" name="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
        <div class="mb-5">
            <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat password</label>
            <input type="password" id="repeat-password" name="password_confirmation" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
        </div>
       
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
        </form>

    </main>
    <SCript>
        $(document).ready(function(){
            // event.preventDefault()
            $.ajax({
                url:"http://127.0.0.1:8000/api/me",
                type:"POST",
                headers:{'Authorization':token},
                success: function(data){

                    $('.nom').text(data.name)
                    $('.email').text(data.email)
                    $('#mail').attr('value',data.email)
                    $('#nom').attr('value',data.name)
                    $('.id').attr('value',data.id)
                }
            })
            var viewForm = true
            $('.form-show').click(function(){
                // event.preventDefault();
                if(viewForm==true){
                $('#form-edit').removeClass('hidden').addClass('max-w-sm mx-auto')
                viewForm=false
                }else if(viewForm==false){
                    $('#form-edit').removeClass('max-w-sm mx-auto').addClass('hidden')
                    viewForm=true
                }
            })
            
            var viewStore = true
            $('.form-add').click(function(){
                // event.preventDefault();
                if(viewStore==true){
                $('#form-store').removeClass('hidden').addClass('max-w-sm mx-auto')
                viewStore=false
                }else if(viewStore==false){
                    $('#form-store').removeClass('max-w-sm mx-auto').addClass('hidden')
                    viewStore=true
                }
            })
        })

        //update or edit profile

        $(document).ready(function(){
            $("#form-edit").submit(function(event){
                event.preventDefault()
                var formData = $(this).serialize();
                $.ajax({
                url:"http://127.0.0.1:8000/api/profile-update",
                type:"POST",
                headers:{'Authorization':token},
                data:formData,
                success: function(data){
                    // data.message a afficher
                    $('#email').attr('value',"")
                    $('#name').attr('value',"")
                    $('.id').attr('value',"")
                }
            })
            })
            // 

            
        })

        //register new user add

        $(document).ready(function (){
            $('#form-store').submit(function (event){
                event.preventDefault();
                // $('#error').removeClass("hidden").addClass(" flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800")
                var formData = $(this).serialize();
                $.ajax({
                    type:"POST",
                    url:"http://127.0.0.1:8000/api/auth/register",
                    
                     headers: {
                              'Accept':'application/json'
                             },
                    
                    data: formData,
                    success: function(data){
                        console.log(data)
                        if(data.access_token != null){
                            // window.open('/users','_self')
                        }
                        
                    }
                })
            })
        })
    </SCript>
