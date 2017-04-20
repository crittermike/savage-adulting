---
title: Yay! Another request! 🙄
form:
    name: contact-form
    fields:
        - name: name
          label: What's your name?
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: What's your email address?
          type: email
          validate:
            required: true

        - name: request
          label: Now type something here.
          type: textarea
          rows: 5
          validate:
            required: true

    buttons:
        - type: submit
          value: Then click this big button

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to: "{{ config.plugins.email.to }}"
            subject: "Savage Adulting request from {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Thank you for your request! I'll be sure to throw it away immediately!

---

