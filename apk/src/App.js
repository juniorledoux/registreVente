import logo from "./logo.svg";
import {BrowserRouter as Router, Routes, Route, Link} from "react-router-dom"
import Dashboard from "./pages/dashboard";

function App() {
  return (
   <Router>
      <Routes>
        <Route exact path="/" element={<Dashboard/>}/>
      </Routes>
   </Router>
  );
}

export default App;
