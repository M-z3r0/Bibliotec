import pg from "pg";

export const db = new pg.Client({
  user: 'postgres',
  host: 'localhost',
  database: 'bd_bibliotec',
  password: 'root',
  port: 5432,
});

db.connect();