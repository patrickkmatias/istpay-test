# Job Seeker
#### Admissional test for "Istpay" company

## 🚀 Run the project

- The project was developed entirely using [Gitpod](https://gitpod.io); You can try the project by yourself with _just one click_ using a [Gitpod workspace](https://gitpod.io/#/github.com/pmattheew/istpay-test); 
  
  It will setup everything and start the development server just for you =)

- **Important!** It's common that on the start the initializer script hangs creating the MySQL database, wait some seconds and it should start Laravel's development server. Otherwise, you can create it by yourself following the instructions below.
<details>
<summary><h4>MySQL Database Setup</h4></summary>
<p>1. Create a database running this command: </p>

<pre><code>mysql -u root -e "create database jobseeker_db"
</code></pre>
<p>2. Start Laravel development server running this command:</p>

<pre><code>npm run laravel.host # must be hosted in cloud environment.
</code></pre>
</details>

## 👨🏾‍💻 Test features
##### Follow these instructions to start using what the project can give

- The project was created focusing on **mobile first**, so I'd recommend using at least Devtools with responsive constraints.

1. Seed the database with premade mock data, it will give you an user that you can login using `test@example.com` as email and `password` as password.
```
php artisan db:seed
```
2. After doing login, you can manage jobs and candidates accessing the `/jobs` route.
- You can run tests using the `php artisan test` command.

<details>
<summary><h2> 🎆 Other </h2></summary>
<li>See the <a href=https://meinsherpa.com >company's website<a> that I'm helping now and that we use the same tech stack, Vue with Laravel Inertia.js</li>
<li>See <a href="https://dourados-store.vercel.app/">this project</a> <a href="https://github.com/pmattheew/dourados-store">(src)</a> that I could complete in 4 days in a technology that I hadn't used before.</li>
<li><a href=https://pmattheew.github.io/site-bdourados >A project that I'm proud of 🙂</a> <em>(with PHP in backend!)</em></li>
</details>
