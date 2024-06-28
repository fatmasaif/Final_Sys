import 'package:flutter/material.dart';
import 'package:webview_flutter/webview_flutter.dart';

void main() {
  runApp(
    MaterialApp(
      debugShowCheckedModeBanner: false,
      theme: ThemeData(useMaterial3: true),
      home: const WebViewApp(),
      title: "Rahtuk",
    ),
  );
}

class WebViewApp extends StatefulWidget {
  const WebViewApp({super.key});

  @override
  State<WebViewApp> createState() => _WebViewAppState();
}

class _WebViewAppState extends State<WebViewApp> {
  late final WebViewController controller;

  @override
  void initState() {
    super.initState();
    // Initialize the WebViewController
    controller = WebViewController()
      ..setJavaScriptMode(JavaScriptMode.unrestricted)
      ..loadRequest(Uri.parse('http://10.0.2.2:8080/rahatuk/'));
  }

  Future<bool> _onWillPop() async {
    if (await controller.canGoBack()) {
      controller.goBack();
      return false; // Do not exit the app
    } else {
      return true; // Exit the app
    }
  }

  @override
  Widget build(BuildContext context) {
    return WillPopScope(
      onWillPop: _onWillPop,
      child: Scaffold(
        appBar: AppBar(
          title: const Text('Rahtuk'),
          leading: IconButton(
            icon: const Icon(Icons.arrow_back),
            onPressed: () async {
              if (await controller.canGoBack()) {
                controller.goBack();
              } else {
                // Optionally handle the case when there is no back history
                Navigator.of(context).pop();
              }
            },
          ),
        ),
        body: WebViewWidget(
          controller: controller,
        ),
      ),
    );
  }
}
