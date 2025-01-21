"use client"
import { useState } from "react";
import { BiSolidDashboard, BiSolidHourglass, BiSolidBookAdd, BiSolidUser, BiSolidHelpCircle, BiSolidExit } from "react-icons/bi";
import { BsBackpackFill } from "react-icons/bs";
import { IoSettingsSharp } from "react-icons/io5";
import Link from "next/link";
import "./SideBar.css";
export const SideBar = () => {
  const [isExpanded, setIsExpanded] = useState(false);
  return (
    <>
      <div
        className={`side-bar ${isExpanded ? "expanded" : ""}`}
        onMouseEnter={() => setIsExpanded(true)}
        onMouseLeave={() => setIsExpanded(false)}
      >
        <div className="div-logo">
          <img src="/img/logo.png" alt="Logo Bibliotec" className="img-logo" /> {/* Logo website */}
        </div>
        {/* Menu side-bar */}
        <div className="menu">
          {/* variable menu */}
          <div className="main bordered">
            <Link href="/login">
              <BiSolidDashboard /> {isExpanded && <span>Catálogo</span>}
            </Link>
            <Link href="#">
              <BsBackpackFill /> {isExpanded && <span>Mochila</span>}
            </Link>
            <Link href="#">
              <BiSolidHourglass /> {isExpanded && <span>Pendências</span>}
            </Link>
            <Link href="#">
              <BiSolidBookAdd /> {isExpanded && <span>Fazer empréstimo</span>}
            </Link>
          </div>
          {/* end variable menu */}
          {/* user settings */}
          <div className="user-settings bordered">
            <Link href="#">
              <BiSolidUser /> {isExpanded && <span>Perfil</span>}
            </Link>
            <Link href="#">
              <IoSettingsSharp /> {isExpanded && <span>Configurações</span>}
            </Link>
          </div>
          {/* end user settings */}
          {/* logout */}
          <div className="logout">
            <Link href="#">
              <BiSolidHelpCircle /> {isExpanded && <span>Ajuda</span>}
            </Link>
            <Link href="#">
              <BiSolidExit /> {isExpanded && <span>Sair</span>}
            </Link>
          </div>
          {/* end logout */}
        </div>
        {/* end menu side-bar */}
      </div>
    </>
  );
};