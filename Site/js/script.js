async function main() {
  async function getPlanets() {
    let data = await fetch('planetas.json');
    let aux = await data.json();
    let a = aux.results.map((item) => {
      return {
        name: item.name,
        climate: item.climate,
        diameter: item.diameter,
        src: item.src,
      };
    });
    console.log(aux.results);
    return await a;
  }
  function addMenu() {
    planetas.map((item) => {
      const navegacao = document.querySelector('.navegacao');
      const li = document.createElement('li');
      const a = document.createElement('a');
      a.textContent = item.name;
      li.appendChild(a);
      navegacao.appendChild(li);
    });
  }

  const planetas = await getPlanets();

  let planeta;

  function changeContent(planeta) {
    const img = document.querySelector('.conteudo img');
    const titulo = document.querySelector('.conteudo h1');
    img.setAttribute('src', includedPlanet(planeta));
    titulo.innerHTML = planeta;
  }

  function handlePlanet() {
    planeta = this.innerText;
    changeContent(planeta);
  }

  addMenu();

  const lista = document.querySelectorAll('a');
  lista.forEach((item) => {
    item.addEventListener('click', handlePlanet);
  });

  function includedPlanet(planeta) {
    let a = planetas.filter((item) => item.name == planeta);

    return a[0].src;
    // planetas.forEach((item) => {
    //   console.log(item);
    // });
  }
}

main();
