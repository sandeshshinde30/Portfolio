import React, { useState } from "react";
import styles from "./NavBar.module.css";

import {getImageUrl} from "../../utils"

export const Navbar = () => {
    const [menuOpen , setMenuOpen] = useState(false)

    return <nav className={styles.navbar}>
        <a href="/" className={styles.title}>Portfolio</a>
        <div className={styles.menu}>
            <img className={styles.menuBtn} 
            src={
                menuOpen 
                ? getImageUrl("nav/closeIcon.png")
                : getImageUrl("nav/menuIcon.png")
            
            } 
            onClick={()=>setMenuOpen(!menuOpen)}
                alt="Menu_Button" />

            <ul className={`${styles.menuitems} ${menuOpen && styles.menuOpen}`}
               onClick={()=> setMenuOpen(false)}>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Technical Skills</a> 
                </li>
                <li>
                    <a href="">Projects</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
                {/* <li>
                    <a href=""><button type="button">Get Resume</button></a>
                </li> */}
            </ul>
        </div>
    </nav>;
}
