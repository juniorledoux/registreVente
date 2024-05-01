import logo from "./logo.svg";
import {BrowserRouter as Router, Routes, Route, Link} from "react-router-dom"
import Dashboard from "./pages/dashboard";
import About from "./pages/about";

function App() {
  return (
   <Router>
      <Routes>
        <Route exact path="/" element={<Dashboard/>}/>
        <Route exact path="/about" element={<About/>}/>
      </Routes>
   </Router>
  );
}

export default App;
