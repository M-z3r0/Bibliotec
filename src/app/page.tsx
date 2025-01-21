import './homepage.css';;
import {pool} from "@/utils/db/postgres";
import postgres from "@/utils/db/postgres";
import { Header } from "@/components/Header/Header";
import { SideBar } from "@/components/SideBar/SideBar";
import Link from 'next/link'
export default async function Home() {
  postgres();  
  return (
    <> 
      <Header pageName={null} userName="Beja" typeUser="Aluno" />
      <SideBar></SideBar>
    </>
  );
}