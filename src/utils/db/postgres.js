import {Pool} from "pg";
// Import da pool provinda do framework PG do node
export const pool = new Pool({
  user: process.env.USER_NAME,
  host: process.env.HOST_NAME,
  database: process.env.DB_NAME,
  password: process.env.DB_PASSWORD,
  port: process.env.PORT_NUMBER
  // Aqui estou estou exportando uma pool em forma de objeto com cada conexão do .env.local como característica
});
export default async function dbConnect(){
  // É criada uma função exporta para conexão com o bd
  await pool.connect((err,client,release)=>{
    if(err){
      return console.log("ERROR IN CONNECTION",err.stack);
    }
    client.query("SELECT NOW()",(req,res)=>{
      // Foi feita uma conexão com a pool com algumas possibilidades, primeiro caso de erro é retornada uma mensagem de erro
      // Depois é feito uma query no bd para testar conexão e feito um release em cima disso
        release();
        if(err){
          return console.error("Error in query execution",err.stack);
        }
        // então é feita uma nova verificação de erro, mas agora para verificar se deu erro na query
        console.log("Connected to database",res.rows);
    });
  });
}