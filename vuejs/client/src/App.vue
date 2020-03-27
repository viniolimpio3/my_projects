<template>
  <div id="app">

    <div id="slogan" class=" text-center">
      <h1>GeradorDeNomes</h1>
      <h6 class="text-secondary">Gera Nomes Utilizando Vue.js</h6>
    </div>

    <div id="main"> 
      <DomainList></DomainList>
    </div>


    


  </div>
</template>

<script>
  import DomainList from "./components/DomainList.vue" ; //COMPONENTE -> tipo um objeto
  import "bootstrap/dist/css/bootstrap.css";
  import "font-awesome/css/font-awesome.css";
  export default {
    name: 'App',
    components:{
      DomainList
    }
  };
</script>


