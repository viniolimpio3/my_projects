<template>
    <div>
      <!-- {{ aqui vão as 'props' -> que são alteradas no App.vue }} -->
      <h5>{{ title }} <span class="badge badge-info">{{ items.length }}</span></h5>
      <div class="card">  
        <div class="card-body">
          
          <ul class="list-group">
              <!-- v-bind também permite a comunicação entre app e appitemlist, fazendo com que os atributos daqui, possam ser acessados de lá -->
              <li class="list-group-item" v-for="item in items" v-bind:key="item" > <!-- V-BIND PEGA A VARIÁVEL CRIADA NO FOREACH(V-FOR), tem a função de usar o atributo em "seu contexto"-->
              <div class="row">
                <div class="col-md">
                  {{ item }}
                </div>
                <div class="col-md text-right">
                  <button class="btn btn-danger" v-on:click="removeItem(item)"><span class="fa fa-trash"></span></button>
                </div>
              </div>
    
            </li>

          </ul>
          <br>   
          <div class="input-group">  
            <input type="text" class="form-control" v-on:keyup.enter = "addItem(item)" v-model="item" placeholder="Digite o Item">
            <div class="input-group-append">
              <button class="btn btn-info" v-on:click="addItem(item)"><span class="fa fa-plus"></span></button>
            </div>
          </div>

        </div>
      </div>    
    </div>
</template>

<script>
export default {
  name: 'AppItemList',
  props:[ "title" , "items"], //propriedade do componente, que lá no App.vue, envia um string 
  data(){
    return{
      item:""
    };
  },
  methods:{
    addItem(item){
      this.$emit("addItem", item);//emissão de um evento -> pra que o componente que "ouvir" a emissão, tome alguma ação -> no caso quem ouve é o component em App.vue
      this.item="";//acessa o att "item" que vem do campo e deixa ele vazio
    },
    removeItem(item){
      this.$emit("removeItem", item);
    }
  }

};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
