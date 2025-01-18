import "./Header.css";
import { HiSearch } from "react-icons/hi";
import { BsFillBackpackFill } from "react-icons/bs";

export const Header = (props: any)=>{
    return(
        <>
            <header>
                <h1>{props.pageName ?? "Bibliotec"}</h1>{/*Page Name*/}
                <div className="search-bar">
                    <input type="text" name="searchbar" id="searchbar" placeholder="Busquem conhecimento"/>{/*Search bar*/}
                    <button><HiSearch /></button>{/*Search Button*/}
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

