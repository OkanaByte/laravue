<template>
    <div class="container">
        <div class="row pull-right">
             <router-link to="/create">
                <a class="btn btn-primary">Create Notebook</a>
            </router-link>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <div v-if="loading">Loading.....!</div>
                <div class="panel panel-default" v-for='notebook in notebooks'>
                    <div class="btn pull-right"><i class="fa fa-pencil"></i></div>
                    <div class="btn pull-right"><i class="fa fa-times"></i></div>
                    <form>
                        <div class="panel-heading">
                            <strong v-show="!editing">{{ notebook.name }}</strong>
                            <input style="width:200px" v-show="editing" type="text" class="form-control">
                        </div>
                        <div class="panel-body">
                            <span v-show="!editing">{{ notebook.body }}</span>
                            <input v-show="editing" type="text" class="form-control">
                        </div>
                    </form>
                    <div class="panel-footer"> -by {{ notebook.user.name }}</div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
    data(){
        return{
            notebooks:[],
            loading:false,
            editing:true
        }
    },
        mounted() {
        //var seft = this;
        //    axios.get('/notebook').then(function(response){
        //         seft.notebooks=response.data;
                //console.log(response);
        //    });
        this.loading=true;
        axios.get('notebook').then((response)=>{this.notebooks=response.data; this.loading=false});
        }
    }
</script>
