import './homepage.css';
import { Header } from "@/components/Header/Header";
import { SideBar } from "@/components/SideBar/SideBar";
export default function Home() {
  return (
    <> 
      <Header pageName={null} userName={null} typeUser={null} />
      <SideBar></SideBar>
    </>
  );
}