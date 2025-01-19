import "dotenv/config";
import pkg from "pg";

const { Pool } = pkg;

const pool = new Pool({
  user: process.env.DB_USER,
  host: process.env.DB_HOST,
  database: process.env.DB_NAME,
  password: String(process.env.DB_PASSWORD),
  port: process.env.DB_PORT,
});

// Função para executar uma conexão com o pool
export const query = async (text, params) => {
  const client = await pool.connect(); // Pega uma conexão do pool 'emprestada'
  try {
    const res = await client.query(text, params); // Executa uma conexão com o texto e os parametros passados pelo servidor
    return res; //Retorna o resultado da requisição
  } catch (err) {
    console.log("Query error: ", err);
    throw err; // Propaga o erro para trata-lo quando a requisição é feita pelo servidor
  } finally {
    client.release(); // 'Devolve' a conexão de volta para o pool
  }
};

export default pool; // Exporta o pool para caso seja necessario utiliza-lo
