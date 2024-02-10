import logo from './logo.webp';
import './App.css';

function App() {
  return (
    <a
      className="App-link"
      href="https://www.instagram.com/chalestriunfo/"
      target="_blank"
      rel="noopener noreferrer"
    >
      <br/> <br/>
      <div className="App">
        <header className="App-header">
          <div>
          <img src={logo} className="App-logo" alt="logo" />
          <p>
              Estamos passando por mudanças <br />
              Em breve novidades triunfais.
            </p>
            CHALÉS TRIUNFO
          </div>
          <br/> <br/> <br/>
          <div> {/* Container para o texto, separado do logo */}
          <iframe title='chalestriufo' scrolling="no" width="320" height="400" src="https://www.instagram.com/chalestriunfo/embed/" frameborder="0"></iframe>
          </div>
        </header>
      </div>
    </a>
  );
}

export default App;
