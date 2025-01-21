import "./Header.css";
import { HiSearch } from "react-icons/hi";
import { BsFillBackpackFill } from "react-icons/bs";
export const Header = (props: any)=>{
    return(
        <>
            <header>
                <div className="div-logo">
                    <h1>{props.pageName ?? "Bibliotec"}</h1>{/*Page Name*/}
                </div>{/*Div para logo*/}
                <div className="search-bar">
                    <form action="">
                        <input type="text" name="searchbar" id="searchbar" placeholder="Busquem conhecimento"/>{/*Search bar*/}
                        <button type="submit"><HiSearch /></button>{/*Search Button*/}
                    </form>{/**/}
                </div>{/*Searchbar div*/}
                <div className="user-sec">
                    <div className="user-infos">
                        <h2>{props.userName ?? "Nome do Usuário"}</h2>{/*User Name*/}
                        <h3>{props.typeUser ?? "Usuário"}</h3>{/*User Type*/}
                    </div>{/*User Infos*/}
                    <button><BsFillBackpackFill /></button>{/*Cart Button*/}
                </div>{/*User Section*/}       
            </header>{/*Header*/}
        </>
    );
}