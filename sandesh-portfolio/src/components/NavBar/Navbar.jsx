import React, { useState } from "react";
import styles from "./NavBar.module.css";

import {getImageUrl} from "../../utils"

export const Navbar = () => {
    return <nav className={styles.navbar}>
        <a href="/" className={styles.title}>Portfolio</a>
        <div className={styles.menu}>
            <img className={styles.menuBtn} src={getImageUrl("nav/menuIcon.png")} alt="Menu_Button" />
            <ul className={styles.menuitems}>
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
            </ul>
        </div>
    </nav>;
}
