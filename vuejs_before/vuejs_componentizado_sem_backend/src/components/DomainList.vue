<template>
  <div id="app">
    <div id="main"> 
      <div class="container">
        <div class="row">
          <!-- PREFIXES -->
          <div class="col">
            <!-- items é a propriedade(props:["Items"]) do componente, que está em appItemList.vue -->
            <!-- Se eu n usasse o v-bind, eu enviaria apenas a string"prefixes", mas usando o v-bind, ele passa pelo meu script, e retorna o valor contido em prefix, segundo meu script!!!!-->
            <AppItemList v-bind:items="prefixes" title="Prefixos" v-on:addItem="addPrefix" v-on:removeItem="removePrefix"></AppItemList>
          </div>
          <!-- SUFIXES -->
          <div class="col">
            <!-- Para alterar a propriedade "title" não precisa colocar v-bind -> pelo fato de que o que é passado ao componente é uma string, não uma var especificamente -->
            <AppItemList v-bind:items="sufixes" title="Sufixos" v-on:addItem="addSufix" v-on:removeItem="removeSufix"></AppItemList>
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
  import AppItemList from "./AppItemList.vue" ; //COMPONENTE -> tipo um objeto
  import "bootstrap/dist/css/bootstrap.css";
  import "font-awesome/css/font-awesome.css";
  export default {
    name: 'App',
    components:{
      AppItemList
    },
    data:function(){//método Que Retorna !!
      return{
        //prefix e sufix são a "model" que vai pro input
        // prefix:"",
        // sufix:"",
        prefixes:['Alfa', 'Air', 'Jet'],
        sufixes:['Hub','Mart','Station']
        //domains[]
      };
    },
    methods:{//aqui vão os métodos "personalizados"
      addPrefix(prefix){//var local prefix - só é usada nessa function
        if(prefix != " "){
          this.prefixes.push(prefix);//adiciona (push) o texto no array prefixes 
          this.prefix = "";//limpa o campo!
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
