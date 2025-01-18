import { BiSolidDashboard, BiSolidCart, BiSolidHourglass, BiSolidBookAdd, BiSolidUser, BiSolidHelpCircle, BiSolidExit } from "react-icons/bi";
import { IoSettingsSharp  } from "react-icons/io5";
import Link from "next/link";
import "./SideBar.css";
export const SideBar = ()=> {
  return (
    <>
      <div className="side-bar">
        <img src="../../../public/img/logo.png" alt="Logo Bibliotec" className="img-logo" /> {/* Logo website */}
        {/* Menu side-bar */}
        <div className="menu">
          {/* variable menu */}
          <div className="main">
            <Link href="#"><BiSolidDashboard /></Link>
            <Link href="#"><BiSolidCart /></Link>
            <Link href="#"><BiSolidHourglass /></Link>
            <Link href="#"><BiSolidBookAdd /></Link>
          </div>
          {/* end variable menu */}
          {/* user settings */}
          <div className="user-settings">
            <Link href="#"><BiSolidUser /></Link>
            <Link href="#"><IoSettingsSharp /></Link>
          </div>
          {/* end user settings */}
          {/* logout */}
          <div className="logout">
            <Link href="#"><BiSolidHelpCircle /></Link>
            <Link href="#"><BiSolidExit /></Link>
          </div>
          {/* end logout */}
        </div>
        {/* end menu side-bar */}
      </div>
    </>
  );
};