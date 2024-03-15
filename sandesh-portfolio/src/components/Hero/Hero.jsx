import React from "react";
import { getImageUrl } from "../../utils";

import styles from "./Hero.module.css";
// import { getImageUrl } from "../../utils";

export const Hero = () => {
  return (
    <section>
        <div><h1>Hi , I'm Sandesh</h1></div>
        <p>Passionate web developer adept in crafting dynamic web applications with 
            HTML, CSS, JavaScript, and PHP, with a keen interest in app development
        </p>
        <a href="mailto:sandeshshinde17@gmail.com">Contact me</a>

        <img src={getImageUrl("hero/heroImage.png")} alt="My Image"/>

        <div className={styles.topBlur}></div>
        <div className={styles.bottomBlur}></div>

    </section>
   );
}