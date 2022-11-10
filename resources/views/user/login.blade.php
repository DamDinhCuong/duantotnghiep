<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('web/css/index.css')}}" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>

<body>
    <div class="container " id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" placeholder="Name" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Password" />
                <button @click="register()">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="text" v-model="username" @keyup.enter="login()" placeholder="Username" />
                <input type="password" v-model="password" @keyup.enter="login()" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button @click="login()">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="{{asset('web/js/login.js')}}"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js"></script>
<script>
    const {
        createApp
    } = Vue
    createApp({

        data() {
            return {
                username:'',
                password: '',
                token:'',
                postBody:{}
            }
        },
        created: function() {},
        mounted: function() {

        },
        methods: {
            login() {
                this.postBody.username=this.username;
                this.postBody.password=this.password;
                console.log("body",this.postBody);
                axios.post('http://watchshop-doan.herokuapp.com/api/account/login',this.postBody)
                .then(response => {      
                    this.token=response.data.data.access_token;
                    console.log(this.token)                                    
                })
            },
            register() {
                axios
                    .get('52.20.194.189:8080/api/account/create-account', {
                        "username": "hainh_55",
                        "password": "111",
                        "email": "nguyenh3nghai050272@gmail.com",
                        "date_of_birth": "05/07/2002",
                        "full_name": "Nguyễn Hoàng Hải",
                        "phone": "0354243285"
                    }).then(response => (
                        console.log(this.email)
                    )).catch(error => console.log(error))
            },
        }
    }).mount('#container')
</script>
