import './index.css';
import image from './../../assets/quizzeo2-removebg.png';
import { Button } from './../../components/Button';
function Home() {
  return (
    <div className="home">
        <img src={image} alt='' />
        <Button />


    </div>
  );
}

export default Home;
