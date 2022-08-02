new WOW().init();

document.querySelectorAll('form').forEach((form) => {
  form.addEventListener(('submit'), (event) => {
    event.preventDefault();

    const data = {};
    for (let i = 0; i < event.target.length; i++) {
      const target = event.target[i];
      if (target.name)
        data[target.name] = target.value;
    }

    console.log(data);

    fetch(event.target.action, {
      method: event.target.method,
      headers: {
        'Content-Type': 'application/json;charset=utf-8',
      },
      body: JSON.stringify(data),
    })
      .then((res) => {
        if (!res.ok) {
          const err = new Error(res.statusText);
          err.response = res;
          throw err;
        }

        return res.json();
      })
      .then((res) => {
        console.log(res);
      })
      .catch((err) => {
        alert('Код ошибки: ' + err.response?.status + '\n' + err.message + '\n' + 'Пожалуйста сообщите администратору о данной ошибке');
      });
  });
});

