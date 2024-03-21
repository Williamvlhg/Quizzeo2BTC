import './index.css'; // Assurez-vous d'avoir le fichier style.css dans le même répertoire

export const CreateAccountPage = () => {
    return (
         <div className='container'>
            <div className='form-container sign-in'>
                <form>
                    <h1>Connexion</h1>
                    <div className="social-icons">
                        <a href="/" className="icon"><i className="fa-brands fa-google-plus-g"></i></a>
                        <a href="/" className="icon"><i className="fa-brands fa-facebook-f"></i></a>
                        <a href="/" className="icon"><i className="fa-brands fa-github"></i></a>
                        <a href="/" className="icon"><i className="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <span>ou se connecter avec votre email</span>
                    <input type="email" placeholder="Email" />
                    <input type="password" placeholder="Password" />
                    <button>Se connecter</button>
                </form>
            </div>
         </div>
    );
}

