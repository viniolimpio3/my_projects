const { ApolloServer } = require("apollo-server");//pega a dependencia do pckg json, colocando ela numa var tipo objeto "ApolloServer"
// como se fosse uma importação


//o schema é aquilo que define as entidades e suas propriedades -> para permitir consultas e mutações
const typeDefs = `

    type Item {
        id: Int
        type: String
        description: String
    }
    
    type Query {
        prefixes: [Item]
        sufixes: [Item]
    }
`;

const items = [

    {id: 1 , type:"prefix" , description: "Alfa" },
    {id: 2 , type:"prefix" , description: "Air" },
    {id: 3 , type:"prefix" , description: "Jet" },
    {id: 4 , type:"sufix" , description: "Hub" },
    {id: 5 , type:"sufix" , description: "Mart" },
    {id: 6 , type:"sufix" , description: "Station" },
    
    
]


const resolvers = {
    Query: {
        prefixes(){
            return items.filter(items => items.type === 'prefix')
        },
        sufixes(){
            return items.filter( items => items.type === "sufix" )
        }
    }
};

const server =  new ApolloServer({ typeDefs, resolvers })
console.log(server.listen());

