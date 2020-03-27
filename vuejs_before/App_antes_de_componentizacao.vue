<template>
  <div id="app">

    <div id="slogan" class=" text-center">
      <h1 class="">GeradorDeNomes</h1>
      <h6 class="text-secondary">Gera Nomes Utilizando Vue.js</h6>
    </div>

    <div id="main"> 
      <div class="container">
        <div class="row">
          
          <!-- PREFIXES -->
          <div class="col">
            <!-- items é a propriedade(props:["Items"]) do componente, que está em appItemList.vue -->
            <!-- Se eu n usasse o v-bind, eu enviaria apenas a string"prefixes", mas usando o v-bind, ele passa pelo meu script, e retorna o valor contido em prefix, segundo meu script!!!!-->
            
            <h5>Prefixo: <span class="badge badge-info">{{prefixes.length}}</span></h5> <!-- EXIBE O TAMANHO DO OBJETO PREFIXES -->

            <div class="card">  
              <div class="card-body">
                
                <ul class="list-group">

                  <li class="list-group-item" v-for="prefix in prefixes" v-bind:key="prefix">  <!-- v-bind define atributos de um elemento -->
                    <div class="row">
                      <div class="col-md">
                         {{ prefix }}<!--itera com o foreach (v-for) prefix = key of prefixes  -->
                      </div>
                      <div class="col-md text-right">
                        <!-- esse parâmetro prefix vem da iteração que ocorre ali em cima -->
                        <button class="btn btn-danger" v-on:click="removePrefix(prefix)"><span class="fa fa-trash"></span></button>
                      </div>
                    </div>
                  </li>
                </ul>
                <br>
                <div class="input-group">  
                  <!-- v-model faz a interpolação(interação) entre a caixa de texto e o "estado da aplicação"  (passando "parâmetros") -->
                  <!-- keyup = quando apertar uma tecla -->
                  <input type="text" class="form-control" v-on:keyup.enter = "addPrefix(prefix)" v-model="prefix" placeholder="Digite o prefixo">
                  <div class="input-group-append">
                    <button class="btn btn-info" v-on:click="addPrefix(prefix)"><span class="fa fa-plus"></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- SUFIXES -->
          <div class="col">
            <!-- <AppItemList v-bind:items="sufixes"></AppItemList> -->
            <h5>Sufixo: <span class="badge badge-info">{{sufixes.length}}</span></h5> <!-- EXIBE O TAMANHO DO OBJETO PREFIXES -->

            <div class="card">  
              <div class="card-body">
                
                <ul class="list-group">

                  <li class="list-group-item" v-for="sufix in sufixes" v-bind:key="sufix">  <!-- v-bind define atributos de um elemento -->
                    <div class="row">
                      <div class="col-md">
                        {{ sufix }}<!--itera com o foreach  -->
                        <!-- esse parâmetro sufix vem da iteração que ocorre ali em cima -->
                      </div>
                      <div class="col-md text-right">
                        
                        <button class="btn btn-danger" v-on:click="removeSufix(sufix)"><span class="fa fa-trash"></span></button>
                      </div>
                    </div>
                  </li>
                </ul>
                <br>
                <div class="input-group">  
                  <!-- v-model faz a interpolação(interação) entre a caixa de texto e o "estado da aplicação"  (passando "parâmetros") -->
                  <!-- keyup = quando apertar uma tecla -->
                  <input type="text" class="form-control" v-on:keyup.enter = "addSufix(sufix)" v-model="sufix" placeholder="Digite o sufixo">
                  <div class="input-group-append">
                    <button class="btn btn-info" v-on:click="addSufix(sufix)"><span class="fa fa-plus"></span></button>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        
        
        <br>

        <!-- DOMAINS -->
        <h5>Domains: <span class="badge badge-info">{{domains.length}}</span></h5>
        <div class="card">
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item" v-for='domain in domains' v-bind:key="domain.name">
                <div class="row">
                  <div class="col-md">
                    <!-- Exibe (itera) apenas o objeto nome -->
                    {{domain.name}}
                  </div>
                  <div class="col-md text-right">
                    <a v-bind:href="domain.checkout" target="_blank" class="btn btn-primary"><span class="fa fa-shopping-cart"></span></a>
                  </div>
                </div>
                
               
              </li>
            </ul>
          </div>
        </div>

        
      </div>

    </div>


    


  </div>
</template>

<script>
  //import AppItemList from "./components/AppItemList.vue" ; //COMPONENTE -> tipo um objeto
  import "bootstrap/dist/css/bootstrap.css";
  import "font-awesome/css/font-awesome.css";
  export default {
    name: 'App',
    // components:{
    //   AppItemList
    // },
    data:function(){//método Que Retorna !!
      return{
        //prefix e sufix são a "model" que vai pro input
        prefix:"",
        sufix:"",
        prefixes:['Alfa', 'Air', 'Jet'],
        sufixes:['Hub','Mart','Station']
        //domains[]
      };
    },
    methods:{//aqui vão os métodos "personalizados"
      addPrefix(prefix){//var local prefix - só é usada nessa function
        if(prefix != " "){
          this.prefixes.push(prefix);//adiciona (push) o texto no array prefixes 
          this.prefix = "";//limpa o campo
          //this.generateDomain();//chama o método que retorna "domains" prontos
        }
        
      },
      addSufix(sufix){
        if(sufix != " "){
          this.sufixes.push(sufix);
          this.sufix = "";
          //this.generateDomain();
        }
          
      },
      removePrefix(prefix){
        this.prefixes.splice(this.prefixes.indexOf(prefix),1);//splice é um método js que deleta um item de uma array (indice, nº de elementos a serem deletados)
        //this.generateDomain();//apos deletar o índice, refaz os domínios
      },
      removeSufix(sufix){
        this.sufixes.splice(this.prefixes.indexOf(sufix),1);
        //this.generateDomain();
      }
      // generateDomain(){
      //   const domains = [];//limpa os índices existentes no objeto
      //   for(const prefix of this.prefixes){
      //     for(const sufix of this.sufixes){
      //       domains.push(prefix + sufix);
      //     }
      //   }
      //   return domains;
      // }
    },
    computed:{// essa propriedade,serve para carregar o método domain() apenas quando for necessário -> quando this.prefixes ou this.sufixes for alterado -> quando adiciona índices, ou retira do objeto.  
      domains(){
        window.console.log("Generate domains");
        
        const domains = [];
        for(const prefix of this.prefixes){
          for(const sufix of this.sufixes){
            const name = prefix + sufix;
            const url = name.toLowerCase();
            const checkout = `https://checkout.hostgator.com.br/?a=add&sld=${url}&tld=.com.br`; //interpolação em js -> feito com ` (crase)!!!
            domains.push({//significa que estou adicionando ao array local "domains" um obj(que contém a chave name e checkout)!! Por isso as chaves dentro de push()
              name,
              checkout
            });//"objeto"(propriedades) nome do "objeto" domain
          }
        }
        return domains;
      }
    }
    // ,
    // created(){//faz parte do lifecycle do vue (ver no grupo "eu" mais info)
    //   this.domains = this.domains(); //o atributo domains (comentado ali em cima) recebe a função domains (no hook computed), que gera todos os nomes possíveis com laços de iteração
    //   //não posso fazer isso, pelo fato de que toda a vez que o usuário fizer alguma alteração no campo prefix ou sufix, ele vai passar pelo domains() o que gera um sobrecarregamento da apliacação
    // }
  };
</script>
