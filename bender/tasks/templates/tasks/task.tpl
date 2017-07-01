{% extends 'core/base.tpl' %}
{% block css %}
    {{ super() }}
    <link href="{{ STATIC_URL }}prism/prism.css" rel="stylesheet">
{% endblock %}

{% import 'tasks/macros.tpl' as macros %}

{% block title %}{{ task.title }}{% endblock %}

{% block content %}
<div class="container-fluid">
    <div class="row">
        <center>
            <h1>{{ task.title }}</h1>
        </center>
        <hr>
    </div>
    <div class="row">
        <br>
        <div class="col-md-1">&nbsp;</div>
        <div class="col-md-6">
            <h3>Отправить код</h3>
            <pre contenteditable="true"><code class="language-c line-numbers">#include &lt;stdio.h&gt;

int main() {
    printf("Hello, world!");
    return 0;
}

</code></pre>
            <button class="btn btn-success">Отправить</button>
            <br><br>
            <div class="alert alert-warning" role="alert">
                <strong>Test fail!</strong> Some useful text.
            </div>
            <div class="alert alert-danger" role="alert">
                <strong>Error!</strong> Error message.
            </div>
        </div>
        <div class="col-md-4">
            <h3>Описание</h3>
            <div>
              <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#descr" aria-controls="descr" role="tab" data-toggle="tab">Условие задачи</a>
                </li>
                <li role="presentation">
                    <a href="#input" aria-controls="input" role="tab" data-toggle="tab">Входящие данные</a>
                </li>
                <li role="presentation">
                    <a href="#output" aria-controls="output" role="tab" data-toggle="tab">Ожидаемый вывод</a>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="descr">
                    <br>{{ task.description }}
                </div>
                <div role="tabpanel" class="tab-pane" id="input">
                    <pre class="command-line language-bash" data-user="bender" data-host="bcw6">
                        <code class="language-none">{{ task.input_example }}</code>
                    </pre>
                </div>
                <div role="tabpanel" class="tab-pane" id="output">
                    <pre class="command-line language-bash" data-user="bender" data-host="bcw6">
                        <code class=" language-bash">{{ task.output_example }}</code>
                    </pre>
                </div>
              </div>
            </div>
            <br><br>
            <h3>История</h3>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Версия</th>
                        <th>Дата</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>v1</td>
                        <td>01.07.2017 21:05:47</td>
                        <td>{{ macros.status_label('code works')}}</td>
                    </tr>
                    <tr>
                        <td>v1</td>
                        <td>01.07.2017 21:05:47</td>
                        <td>{{ macros.status_label('code compiles')}}</td>
                    </tr>
                    <tr>
                        <td>v1</td>
                        <td>01.07.2017 21:05:47</td>
                        <td>{{ macros.status_label('code fail')}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-1">&nbsp;</div>
    </div>
</div>
{% endblock %}

{% block js %}
    {{ super() }}
    <script src="{{ STATIC_URL }}prism/prism.js"></script>
{% endblock %}