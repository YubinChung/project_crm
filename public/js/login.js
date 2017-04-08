/**
 * Created by bong on 2017. 4. 2..
 */
new Vue({
    el:'.container',
    data:{
        user_id:'',
        password:'',
        user_id_empty_err:'',
        password_empty_err:'',
        login_message:'',
        redirect:''
    },
    methods:{
        login:function(){

            axios.post('/login', this.$data)
                .then(response => {
                    ( response.data.user_id )?(this.user_id_empty_err = response.data.user_id[0]):(this.user_id_empty_err = '');
                    ( response.data.password )?(this.password_empty_err = response.data.password[0]):(this.password_empty_err = '');

                    if (response.data.login_message){
                        return this.login_message = response.data.login_message;
                    }
                window.location = response.data.redirect;
                console.log(response);

            });

            axios.get('/admin', this.$data)
                .then(function(){
                    this.user_id = response.data.user_id;
                });




        },

    }
});/**
 * Created by bong on 2017. 4. 4..
 */
