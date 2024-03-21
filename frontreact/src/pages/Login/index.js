import './index.css'; // Assurez-vous d'avoir le fichier style.css dans le même répertoire
import { FaGoogle } from 'react-icons/fa'
import { FaFacebook } from'react-icons/fa'
import { FaGithub } from "react-icons/fa";
import { FaLinkedin } from "react-icons/fa";
import { useState } from 'react';
import Button from './../../components/Button';
const Login = () => {
    const [isActive, setIsActive] = useState(false);
    const handleToggle = () => {
        setIsActive(!isActive);
    };

   
    return (
        <div className='page'>
            <div className={`container ${isActive ? 'active' : ''}`}>
                <div className='form-container sign-in'>
                    <form>
                        <h1>Connexion</h1>
                        <div className="social-icons">
                            <a href="/" className="icon"><FaGoogle /></a>
                            <a href="/" className="icon"><FaFacebook /></a>
                            <a href="/" className="icon"><FaGithub /></a>
                            <a href="/" className="icon"><FaLinkedin /></a>
                        </div>
                        <span>ou se connecter avec votre email</span>
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <a href='/'>Mot de passé oublié ?</a>
                        <Button.Primary label={"Se connecter"}/>
                    </form>
                </div>
                <div className='form-container sign-up'>
                    <form>
                        <h1>Inscription</h1>
                        <div className="social-icons">
                            <a href="/" className="icon"><FaGoogle /></a>
                            <a href="/" className="icon"><FaFacebook /></a>
                            <a href="/" className="icon"><FaGithub /></a>
                            <a href="/" className="icon"><FaLinkedin /></a>
                        </div>
                        <span>ou s'inscrire avec votre email personnel</span>
                        <input type="text" placeholder="Nom" />
                        <input type="email" placeholder="Email" />
                        <input type="password" placeholder="Password" />
                        <Button.Primary label={"S'inscrire"}/>

                    </form>
                </div>
                <div className='toggle-container'>
                    <div className='toggle'>
                        <div className='toggle-panel toggle-left'>
                            <h1> Bon retour ! </h1>
                            <p>Connectez-vous pour pouvoir utiliser notre site internet !</p>
                            <Button.Secondary label={"Se connecter"} onClick={handleToggle}/>
                        </div>
                        <div className='toggle-panel toggle-right'>
                            <h1> Bienvenue ! </h1>
                            <p>Incrivez-vous pour pouvoir utiliser notre site internet !</p>
                            <Button.Secondary label={"S'inscrire"} onClick={handleToggle}/>
                        </div>
                    </div>

                </div>
            </div>
         </div>
    );
}

export default Login;
